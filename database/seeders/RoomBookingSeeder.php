<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('room_bookings')->insert(
            [
                1 => ['room_id' => 1, 'plan_id' => 1, 'date' => '2023-06-01', 'created_at' => now(), 'updated_at' => now()],
                2 => ['room_id' => 1, 'plan_id' => 1, 'date' => '2023-06-02', 'created_at' => now(), 'updated_at' => now()],
                3 => ['room_id' => 2, 'plan_id' => 2, 'date' => '2023-06-22', 'created_at' => now(), 'updated_at' => now()],
                4 => ['room_id' => 2, 'plan_id' => 2, 'date' => '2023-06-10', 'created_at' => now(), 'updated_at' => now()],
                5 => ['room_id' => 3, 'plan_id' => 3, 'date' => '2023-06-02', 'created_at' => now(), 'updated_at' => now()],
                6 => ['room_id' => 3, 'plan_id' => 3, 'date' => '2023-06-01', 'created_at' => now(), 'updated_at' => now()],
            ]
        );
    }
}
