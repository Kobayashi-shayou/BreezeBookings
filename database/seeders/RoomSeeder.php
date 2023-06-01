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
                1 => ['room_type' => 0, 'count' => 1, 'price' => 5000, 'room_no' => 101, 'created_at' => now(), 'updated_at' => now()],
                2 => ['room_type' => 2, 'count' => 5, 'price' => 100000, 'room_no' => 201, 'created_at' => now(), 'updated_at' => now()],
                3 => ['room_type' => 1, 'count' => 2, 'price' => 8000, 'room_no' => 301, 'created_at' => now(), 'updated_at' => now()],
                4 => ['room_type' => 0, 'count' => 1, 'price' => 5000, 'room_no' => 102, 'created_at' => now(), 'updated_at' => now()],
            ]
        );
    }
}
