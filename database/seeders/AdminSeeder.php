<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('admins')->insert(
            [
                1 => ['name' => 'テスト管理者1', 'email' => 'admin1@test.com', 'password' => \Hash::make('11111111'), 'remember_token' => \Str::random(10), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
                2 => ['name' => 'テスト管理者2', 'email' => 'admin2@test.com', 'password' => \Hash::make('11111111'), 'remember_token' => \Str::random(10), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
                3 => ['name' => 'テスト管理者3', 'email' => 'admin3@test.com', 'password' => \Hash::make('11111111'), 'remember_token' => \Str::random(10), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
                4 => ['name' => 'テスト管理者4', 'email' => 'admin4@test.com', 'password' => \Hash::make('11111111'), 'remember_token' => \Str::random(10), 'email_verified_at' => now(), 'created_at' => now(), 'updated_at' => now()],
            ]
        );
    }

}
