<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(
            [
                1 => ['name' => 'テストユーザー', 'email' => 'user@test.com', 'password' => \Hash::make('11111111'), 'remember_token' => \Str::random(10), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()]
            ]
        );
    }
}
