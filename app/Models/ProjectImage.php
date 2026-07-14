<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class ProjectImage extends Model
{
    protected $guarded = [];

    protected static function booted(): void
    {
        static::deleting(function (ProjectImage $image): void {
            if ($image->path) {
                Storage::disk('public')->delete($image->path);
            }
        });
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function getUrlAttribute(): ?string
    {
        if (! $this->path) {
            return null;
        }

        $path = ltrim(str_replace('\\', '/', $this->path), '/');
        if (str_starts_with($path, 'storage/')) {
            $path = substr($path, strlen('storage/'));
        }

        if (preg_match('#^https?://#i', $path)) {
            return $path;
        }

        if (! Storage::disk('public')->exists($path)) {
            return null;
        }

        return '/storage/'.$path;
    }
}
