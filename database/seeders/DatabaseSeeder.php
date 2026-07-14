<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            ServicesTableSeeder::class,
            SkillsTableSeeder::class,
            ProjectsTableSeeder::class,
            ProjectImagesTableSeeder::class,
            TestimonialsTableSeeder::class,
            AboutsTableSeeder::class,
            HomepageFaqsTableSeeder::class,
            SocialLinksTableSeeder::class,
        ]);
    }
}

