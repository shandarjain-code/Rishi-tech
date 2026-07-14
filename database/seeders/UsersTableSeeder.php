<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin User',
                'email' => 'admin@rishijain.tech',
                'email_verified_at' => '2026-04-11 17:42:28',
                'password' => '$2y$12$lUxKKqZOFGr3lXeJVmrlCeG1H6DWfwX7JBIBSw6hX9cjELgpG57XW',
                'remember_token' => 'keQ1PZjrfz',
                'created_at' => '2026-04-11 17:42:28',
                'updated_at' => '2026-04-11 17:42:28',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$auC7dv9g.B5kf8ODqLlEkuA6vBp7X6qd/ZXPkOdxlQUon1xZKyNsq',
                'remember_token' => NULL,
                'created_at' => '2026-05-08 18:58:39',
                'updated_at' => '2026-05-08 18:58:39',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Admin User',
                'email' => 'rishijain9343@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$wVT/mM6mV9Dz6VQoDaKjre.0MzYdK7YEmGa9Fvt/T3vH8h3fQE89u',
                'remember_token' => NULL,
                'created_at' => '2026-07-14 06:54:12',
                'updated_at' => '2026-07-14 06:54:12',
            ),
        ));
        
        
    }
}