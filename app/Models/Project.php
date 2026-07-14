<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $guarded = [];

    protected $appends = [
        'cover_image_url',
        'thumbnail_url',
        'summary',
        'detail_route_key',
    ];

    protected $casts = [
        'tech_stack' => 'array',
        'features' => 'array',
        'faqs' => 'array',
        'is_featured' => 'boolean',
    ];

    protected static function booted(): void
    {
        static::saving(function (Project $project): void {
            if ($project->title) {
                $project->slug = $project->uniqueSlug($project->slug ?: $project->title);
            }
        });

        static::deleting(function (Project $project): void {
            if ($project->thumbnail_path) {
                Storage::disk('public')->delete($project->thumbnail_path);
            }
            if ($project->video_path) {
                Storage::disk('public')->delete($project->video_path);
            }
            $project->images()->get()->each(function (ProjectImage $image): void {
                $image->delete();
            });
        });
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProjectImage::class)->orderBy('sort_order');
    }

    /**
     * @return array<int, string>
     */
    public function orderedImageUrls(): array
    {
        return $this->images
            ->map(fn (ProjectImage $img) => $img->url)
            ->filter()
            ->values()
            ->all();
    }

    public function getCoverImageUrlAttribute(): ?string
    {
        return $this->thumbnail_url ?: $this->images->first()?->url;
    }

    public function getThumbnailUrlAttribute(): ?string
    {
        $rawPath = $this->thumbnail_path ?: $this->image;

        if (! $rawPath) {
            return null;
        }

        $path = ltrim(str_replace('\\', '/', $rawPath), '/');
        if (str_starts_with($path, 'storage/')) {
            $path = substr($path, strlen('storage/'));
        }

        if (preg_match('#^https?://#i', $path)) {
            return $path;
        }

        if (str_starts_with($path, 'http')) {
            return $path;
        }

        if (! Storage::disk('public')->exists($path)) {
            return null;
        }

        return '/storage/'.$path;
    }

    public function getSummaryAttribute(): string
    {
        return $this->short_overview ?: Str::limit(strip_tags($this->description ?? ''), 180);
    }

    public function getDetailRouteKeyAttribute(): string|int
    {
        return $this->slug ?: $this->id;
    }

    public function getVideoUrlAttribute(): ?string
    {
        if (! $this->video_path) {
            return null;
        }

        $path = $this->video_path;

        if (is_array($path)) {
            $path = $path[0] ?? null;
        }

        if (! is_string($path) || trim($path) === '') {
            return null;
        }

        $path = ltrim(str_replace('\\', '/', trim($path)), '/');
        if (str_starts_with($path, 'storage/')) {
            $path = substr($path, strlen('storage/'));
        }

        if (preg_match('#^https?://#i', $path)) {
            return $path;
        }

        return '/storage/'.$path;
    }

    private function uniqueSlug(string $source): string
    {
        $base = Str::slug($source) ?: 'project';
        $slug = $base;
        $suffix = 2;

        while (
            static::query()
                ->where('slug', $slug)
                ->when($this->exists, fn ($query) => $query->whereKeyNot($this->getKey()))
                ->exists()
        ) {
            $slug = $base.'-'.$suffix;
            $suffix++;
        }

        return $slug;
    }
}
