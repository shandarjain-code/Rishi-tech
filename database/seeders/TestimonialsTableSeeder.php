<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Karan',
                'feedback' => 'sdfads',
                'rating' => 5,
                'image_path' => 'testimonials/01KP0W41394RKN9GVECQDTM059.png',
                'sort_order' => 2,
                'is_published' => 1,
                'created_at' => '2026-04-12 12:54:29',
                'updated_at' => '2026-05-09 04:45:13',
            ),
        ));
        
        
    }
}