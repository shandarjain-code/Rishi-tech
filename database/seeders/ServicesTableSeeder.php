<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Web Development',
                'description' => 'Custom web applications built with modern frameworks like Laravel, React, and Vue.js. Responsive design and optimal performance guaranteed.',
                'icon' => 'web',
                'sort_order' => 1,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Mobile App Development',
                'description' => 'Native and cross-platform mobile applications for iOS and Android using React Native, Flutter, or native technologies.',
                'icon' => 'mobile',
                'sort_order' => 2,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'E-commerce Solutions',
                'description' => 'Complete online stores with payment integration, inventory management, and customer relationship management features.',
                'icon' => 'shopping-cart',
                'sort_order' => 3,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'SaaS Platform Development',
                'description' => 'Scalable SaaS applications with subscription management, multi-tenancy, and enterprise-grade security.',
                'icon' => 'cloud',
                'sort_order' => 4,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'API Development',
                'description' => 'RESTful and GraphQL APIs with proper documentation, authentication, and integration capabilities.',
                'icon' => 'code',
                'sort_order' => 5,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Database Design',
                'description' => 'Optimized database architecture, migration strategies, and performance tuning for scalable applications.',
                'icon' => 'database',
                'sort_order' => 6,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'AI Chatbot Development',
                'description' => 'Build intelligent AI chatbots tailored to your business needs. I create custom chatbots powered by OpenAI, Gemini, or other AI models with website integration, WhatsApp, Messenger, CRM connectivity, lead generation, customer support, appointment booking, and automation. Fast, secure, responsive, and easy to manage.',
                'icon' => 'chat-bubble-left-right',
                'sort_order' => 7,
                'created_at' => '2026-07-13 09:09:34',
                'updated_at' => '2026-07-13 09:09:34',
            ),
        ));
        
        
    }
}