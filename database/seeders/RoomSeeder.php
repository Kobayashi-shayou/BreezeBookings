<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('rooms')->insert(
            [
                1 => ['name' => 'スタンダード', 'count' => 2, 'price' => 10000, 'created_at' => now(), 'updated_at' => now()],
                2 => ['name' => 'スイートルーム', 'count' => 5, 'price' => 100000, 'created_at' => now(), 'updated_at' => now()],
                3 => ['name' => 'ダブルルーム', 'count' => 1, 'price' => 5000, 'created_at' => now(), 'updated_at' => now()],
            ]
        );
    }
}
