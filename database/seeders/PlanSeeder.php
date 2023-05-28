<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('plans')->insert(
            [
                1 => ['name' => 'おひとり様おすすめプラン【週末限定】', 'description' => '多忙な日々にゆとりのあるホテルライフはいかがでしょうか？', 'created_at' => now(), 'updated_at' => now()],
                2 => ['name' => '豪遊プラン', 'description' => '年に1回の贅沢はいかがでしょうか？最上級のディナー、ブランチ。お部屋でお食事可能です', 'created_at' => now(), 'updated_at' => now()],
                3 => ['name' => 'お友達とご一緒プラン', 'description' => 'コロナで卒業旅行に行けなかった社会人の方々、ぜひ思い出として宿泊されてみてはいかがでしょうか？', 'created_at' => now(), 'updated_at' => now()],
            ]
        );
    }
}
