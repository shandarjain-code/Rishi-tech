<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('social_links', function (Blueprint $table) {
            $table->id();
            $table->string('platform')->unique();
            $table->string('label')->nullable();
            $table->string('url');
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        DB::table('social_links')->insert([
            [
                'platform' => 'instagram',
                'label' => 'Instagram',
                'url' => 'https://www.instagram.com/',
                'sort_order' => 10,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'platform' => 'facebook',
                'label' => 'Facebook',
                'url' => 'https://www.facebook.com/',
                'sort_order' => 20,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'platform' => 'linkedin',
                'label' => 'LinkedIn',
                'url' => 'https://www.linkedin.com/in/rishi-jain-b14945262/',
                'sort_order' => 30,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'platform' => 'whatsapp',
                'label' => 'WhatsApp',
                'url' => 'https://wa.me/919522339343',
                'sort_order' => 40,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'platform' => 'freelancer',
                'label' => 'Freelancer.com',
                'url' => 'https://www.freelancer.in/u/rishi9343?sb=t',
                'sort_order' => 50,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('social_links');
    }
};
