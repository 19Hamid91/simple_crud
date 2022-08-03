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
                'remember_token' =>null,
            ],
        ];

        User::insert($users);
    }
}
