<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'room_number' => '112-A',
            'floor_id' => 1,
            'count' => 4,
            'busy' => 2,
        ]);
        DB::table('rooms')->insert([
            'room_number' => '213-A',
            'floor_id' => 2,
            'count' => 4,
            'busy' => 2,
        ]);
        DB::table('rooms')->insert([
            'room_number' => '313-A',
            'floor_id' => 3,
            'count' => 4,
            'busy' => 4,
        ]);
        DB::table('rooms')->insert([
            'room_number' => '115-A',
            'floor_id' => 4,
            'count' => 2,
            'busy' => 2,
        ]);
    }
}
