<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('m_rooms')->insert(
            [
                1 => ['room_type' => '0', 'count' => 1, 'price' => 5000, 'room_no' => 101, 'created_at' => now(), 'updated_at' => now()],
                2 => ['room_type' => '0', 'count' => 1, 'price' => 5000, 'room_no' => 102, 'created_at' => now(), 'updated_at' => now()],
                3 => ['room_type' => '0', 'count' => 1, 'price' => 5000, 'room_no' => 103, 'created_at' => now(), 'updated_at' => now()],
                4 => ['room_type' => '1', 'count' => 2, 'price' => 8000, 'room_no' => 201, 'created_at' => now(), 'updated_at' => now()],
                5 => ['room_type' => '1', 'count' => 2, 'price' => 8000, 'room_no' => 202, 'created_at' => now(), 'updated_at' => now()],
                6 => ['room_type' => '1', 'count' => 2, 'price' => 8000, 'room_no' => 203, 'created_at' => now(), 'updated_at' => now()],
                7 => ['room_type' => '2', 'count' => 5, 'price' => 100000, 'room_no' => 301, 'created_at' => now(), 'updated_at' => now()],
                8 => ['room_type' => '2', 'count' => 5, 'price' => 100000, 'room_no' => 302, 'created_at' => now(), 'updated_at' => now()],
            ]
        );
    }
}
