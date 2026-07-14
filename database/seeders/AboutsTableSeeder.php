<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('abouts')->delete();
        
        \DB::table('abouts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'small_heading' => 'hello ',
                'main_heading_first' => 'duniya',
                'main_heading_second' => 'rishi ',
                'description' => 'jain',
                'profile_image' => '01KXFQ2JGW3HQVZN72Z8NAWZ3E.png',
                'created_at' => '2026-07-14 07:04:47',
                'updated_at' => '2026-07-14 07:04:47',
            ),
        ));
        
        
    }
}