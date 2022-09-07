<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FloorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('floors')->insert([
            'floor' => '1-etaj',
            'bino_id' => 1,
        ]);
        DB::table('floors')->insert([
            'floor' => '2-etaj',
            'bino_id' => 1,
        ]);
        DB::table('floors')->insert([
            'floor' => '3-etaj',
            'bino_id' => 1,
        ]);
        DB::table('floors')->insert([
            'floor' => '1-etaj',
            'bino_id' => 2,
        ]);
        DB::table('floors')->insert([
            'floor' => '2-etaj',
            'bino_id' => 2,
        ]);
        DB::table('floors')->insert([
            'floor' => '3-etaj',
            'bino_id' => 2,
        ]);
    }
}
