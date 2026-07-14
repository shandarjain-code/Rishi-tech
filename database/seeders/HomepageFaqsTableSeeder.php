<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomepageFaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('homepage_faqs')->delete();
        
        \DB::table('homepage_faqs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question' => 'Which technologies can my project use?',
                'answer' => 'Projects can be built with Laravel, React, Flutter, PHP, APIs, automation workflows, SaaS architecture, or a custom stack based on the product goal.',
                'is_published' => 1,
                'sort_order' => 1,
                'created_at' => '2026-05-08 18:28:41',
                'updated_at' => '2026-05-08 18:28:41',
            ),
            1 => 
            array (
                'id' => 2,
                'question' => 'Can I manage portfolio projects from the admin panel?',
                'answer' => 'Yes. Project titles, slugs, overviews, descriptions, thumbnails, galleries, tech stack tags, links, FAQs, SEO fields, and sorting are managed from the backend.',
                'is_published' => 1,
                'sort_order' => 2,
                'created_at' => '2026-05-08 18:28:41',
                'updated_at' => '2026-05-08 18:28:41',
            ),
            2 => 
            array (
                'id' => 3,
                'question' => 'Do you build full product pages and case studies?',
                'answer' => 'Yes. Each project can have a complete detail page with overview, gallery, tech stack, features, challenges, solutions, live links, repository links, and project-specific FAQs.',
                'is_published' => 1,
                'sort_order' => 3,
                'created_at' => '2026-05-08 18:28:41',
                'updated_at' => '2026-05-08 18:28:41',
            ),
            3 => 
            array (
                'id' => 4,
                'question' => 'What is my name',
                'answer' => 'Rishi Jain',
                'is_published' => 1,
                'sort_order' => 0,
                'created_at' => '2026-05-08 18:59:56',
                'updated_at' => '2026-05-08 18:59:56',
            ),
        ));
        
        
    }
}