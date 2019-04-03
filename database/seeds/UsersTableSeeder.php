<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'created_at' => '2019-04-03 00:00:00',
                'password' => bcrypt('admin@123'),
            ],

        ]);  
	 }
}
