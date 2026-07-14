<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Testimonial extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
        ];
    }

    protected static function booted(): void
    {
        static::deleting(function (Testimonial $testimonial): void {
            if ($testimonial->image_path) {
                Storage::disk('public')->delete($testimonial->image_path);
            }
        });
    }

    public function getImageUrlAttribute(): ?string
    {
        if (! $this->image_path) {
            return null;
        }

        $path = ltrim(str_replace('\\', '/', $this->image_path), '/');
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
