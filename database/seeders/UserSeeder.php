<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
            [
                'name' => 'Administrator',
                'email' => 'admin01@gmail.com',
                'password' => bcrypt('#Admin123'),
                'level' => 'admin',
            ],
            [
                'name' => 'Alfian Syahli',
                'email' => 'alfian123@gmail.com',
                'password' => bcrypt('password'),
                'level' => 'admin',
            ],
            [
                'name' => 'Testing',
                'email' => 'testing123@gmail.com',
                'password' => bcrypt('#User1234'),
                'level' => 'user',

                
            ],
        ]);
    }
}
