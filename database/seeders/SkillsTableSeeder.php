<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('skills')->delete();
        
        \DB::table('skills')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Laravel',
                'category' => 'Backend',
                'proficiency_percentage' => 95,
                'sort_order' => 1,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'PHP',
                'category' => 'Backend',
                'proficiency_percentage' => 95,
                'sort_order' => 2,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'React.js',
                'category' => 'Frontend',
                'proficiency_percentage' => 90,
                'sort_order' => 3,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Vue.js',
                'category' => 'Frontend',
                'proficiency_percentage' => 85,
                'sort_order' => 4,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'JavaScript',
                'category' => 'Frontend',
                'proficiency_percentage' => 95,
                'sort_order' => 5,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'MySQL',
                'category' => 'Database',
                'proficiency_percentage' => 90,
                'sort_order' => 6,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'PostgreSQL',
                'category' => 'Database',
                'proficiency_percentage' => 85,
                'sort_order' => 7,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'React Native',
                'category' => 'Mobile',
                'proficiency_percentage' => 80,
                'sort_order' => 8,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Flutter',
                'category' => 'Mobile',
                'proficiency_percentage' => 75,
                'sort_order' => 9,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Docker',
                'category' => 'DevOps',
                'proficiency_percentage' => 80,
                'sort_order' => 10,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Git',
                'category' => 'DevOps',
                'proficiency_percentage' => 95,
                'sort_order' => 11,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'AWS',
                'category' => 'DevOps',
                'proficiency_percentage' => 75,
                'sort_order' => 12,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Tailwind CSS',
                'category' => 'Frontend',
                'proficiency_percentage' => 90,
                'sort_order' => 13,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Bootstrap',
                'category' => 'Frontend',
                'proficiency_percentage' => 85,
                'sort_order' => 14,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Node.js',
                'category' => 'Backend',
                'proficiency_percentage' => 80,
                'sort_order' => 15,
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
        ));
        
        
    }
}