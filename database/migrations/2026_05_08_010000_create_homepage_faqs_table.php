<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('homepage_faqs', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->text('answer');
            $table->boolean('is_published')->default(true);
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();

            $table->index(['is_published', 'sort_order']);
        });

        DB::table('homepage_faqs')->insert([
            [
                'question' => 'Which technologies can my project use?',
                'answer' => 'Projects can be built with Laravel, React, Flutter, PHP, APIs, automation workflows, SaaS architecture, or a custom stack based on the product goal.',
                'is_published' => true,
                'sort_order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Can I manage portfolio projects from the admin panel?',
                'answer' => 'Yes. Project titles, slugs, overviews, descriptions, thumbnails, galleries, tech stack tags, links, FAQs, SEO fields, and sorting are managed from the backend.',
                'is_published' => true,
                'sort_order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Do you build full product pages and case studies?',
                'answer' => 'Yes. Each project can have a complete detail page with overview, gallery, tech stack, features, challenges, solutions, live links, repository links, and project-specific FAQs.',
                'is_published' => true,
                'sort_order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('homepage_faqs');
    }
};
