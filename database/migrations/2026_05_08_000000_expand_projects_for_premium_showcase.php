<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('slug')->nullable()->unique()->after('title');
            $table->text('short_overview')->nullable()->after('slug');
            $table->string('thumbnail_path')->nullable()->after('short_overview');
            $table->string('category')->nullable()->after('description');
            $table->boolean('is_featured')->default(true)->after('category');
            $table->json('features')->nullable()->after('tech_stack');
            $table->text('challenge')->nullable()->after('features');
            $table->text('solution')->nullable()->after('challenge');
            $table->json('faqs')->nullable()->after('solution');
            $table->string('meta_title')->nullable()->after('github_link');
            $table->text('meta_description')->nullable()->after('meta_title');
        });

        DB::table('projects')
            ->select('id', 'title', 'description')
            ->orderBy('id')
            ->get()
            ->each(function ($project): void {
                DB::table('projects')
                    ->where('id', $project->id)
                    ->update([
                        'slug' => $this->uniqueSlug($project->title, $project->id),
                        'short_overview' => Str::limit(strip_tags($project->description ?? ''), 180, ''),
                        'is_featured' => true,
                    ]);
            });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn([
                'slug',
                'short_overview',
                'thumbnail_path',
                'category',
                'is_featured',
                'features',
                'challenge',
                'solution',
                'faqs',
                'meta_title',
                'meta_description',
            ]);
        });
    }

    private function uniqueSlug(string $title, int $id): string
    {
        $base = Str::slug($title) ?: 'project';
        $slug = $base;
        $suffix = 2;

        while (
            DB::table('projects')
                ->where('slug', $slug)
                ->where('id', '!=', $id)
                ->exists()
        ) {
            $slug = $base.'-'.$suffix;
            $suffix++;
        }

        return $slug;
    }
};
