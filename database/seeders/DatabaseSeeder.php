<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::updateOrCreate(
            ['email' => 'rishijain9343@gmail.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('Apple@2578'),
            ]
        );

        // Seed Services
        $services = [
            [
                'title' => 'Web Development',
                'description' => 'Custom web applications built with modern frameworks like Laravel, React, and Vue.js. Responsive design and optimal performance guaranteed.',
                'icon' => 'web',
                'sort_order' => 1,
            ],
            [
                'title' => 'Mobile App Development',
                'description' => 'Native and cross-platform mobile applications for iOS and Android using React Native, Flutter, or native technologies.',
                'icon' => 'mobile',
                'sort_order' => 2,
            ],
            [
                'title' => 'E-commerce Solutions',
                'description' => 'Complete online stores with payment integration, inventory management, and customer relationship management features.',
                'icon' => 'shopping-cart',
                'sort_order' => 3,
            ],
            [
                'title' => 'SaaS Platform Development',
                'description' => 'Scalable SaaS applications with subscription management, multi-tenancy, and enterprise-grade security.',
                'icon' => 'cloud',
                'sort_order' => 4,
            ],
            [
                'title' => 'API Development',
                'description' => 'RESTful and GraphQL APIs with proper documentation, authentication, and integration capabilities.',
                'icon' => 'code',
                'sort_order' => 5,
            ],
            [
                'title' => 'Database Design',
                'description' => 'Optimized database architecture, migration strategies, and performance tuning for scalable applications.',
                'icon' => 'database',
                'sort_order' => 6,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

        // Seed Skills
        $skills = [
            ['name' => 'Laravel', 'category' => 'Backend', 'proficiency_percentage' => 95, 'sort_order' => 1],
            ['name' => 'PHP', 'category' => 'Backend', 'proficiency_percentage' => 95, 'sort_order' => 2],
            ['name' => 'React.js', 'category' => 'Frontend', 'proficiency_percentage' => 90, 'sort_order' => 3],
            ['name' => 'Vue.js', 'category' => 'Frontend', 'proficiency_percentage' => 85, 'sort_order' => 4],
            ['name' => 'JavaScript', 'category' => 'Frontend', 'proficiency_percentage' => 95, 'sort_order' => 5],
            ['name' => 'MySQL', 'category' => 'Database', 'proficiency_percentage' => 90, 'sort_order' => 6],
            ['name' => 'PostgreSQL', 'category' => 'Database', 'proficiency_percentage' => 85, 'sort_order' => 7],
            ['name' => 'React Native', 'category' => 'Mobile', 'proficiency_percentage' => 80, 'sort_order' => 8],
            ['name' => 'Flutter', 'category' => 'Mobile', 'proficiency_percentage' => 75, 'sort_order' => 9],
            ['name' => 'Docker', 'category' => 'DevOps', 'proficiency_percentage' => 80, 'sort_order' => 10],
            ['name' => 'Git', 'category' => 'DevOps', 'proficiency_percentage' => 95, 'sort_order' => 11],
            ['name' => 'AWS', 'category' => 'DevOps', 'proficiency_percentage' => 75, 'sort_order' => 12],
            ['name' => 'Tailwind CSS', 'category' => 'Frontend', 'proficiency_percentage' => 90, 'sort_order' => 13],
            ['name' => 'Bootstrap', 'category' => 'Frontend', 'proficiency_percentage' => 85, 'sort_order' => 14],
            ['name' => 'Node.js', 'category' => 'Backend', 'proficiency_percentage' => 80, 'sort_order' => 15],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }

        // Projects are managed from the admin panel so local seed runs do not recreate demo portfolio items.
    }
}
