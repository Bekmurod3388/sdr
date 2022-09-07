<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FakultetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fakultets')->insert([
            'name' => 'Kompyuter injiniring',
            'user_id' => 2,
        ]);
        DB::table('fakultets')->insert([
            'name' => 'Telekommunikatsiya texnologiyalari',
            'user_id' => 2,
        ]);
        DB::table('fakultets')->insert([
            'name' => 'Biologiya',
            'user_id' => 3,
        ]);
    }
}
