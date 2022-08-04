<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'level' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'email_verified_at' => now(),
                'remember_token' =>null,
            ],
            [
                'name' => 'user1',
                'level' => 'user',
                'email' => 'user1@gmail.com',
                'password' => bcrypt('user1111'),
                'email_verified_at' => now(),
                'remember_token' =>null,
            ],
            [
                'name' => 'user2',
                'level' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('user2222'),
                'email_verified_at' => now(),
                'remember_token' =>null,
            ],
        ];

        User::insert($users);
    }
}
