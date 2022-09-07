<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('binos')->insert([
            'name' => 'TATU UF',
            'user_id' => 2,
        ]);
        DB::table('binos')->insert([
            'name' => 'URDU',
            'user_id' => 3,
        ]);
    }
}
