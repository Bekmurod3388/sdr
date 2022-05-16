<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('admin'),
            'role' => 'super_admin',
            'user_id' => 1,
            'status' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Asadbek',
            'email' => 'asadbek.polatov.02@mail.ru',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
            'user_id' => 1,
            'status' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Beksulton',
            'email' => 'beksulton1112@gmail.com',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
            'user_id' => 1,
            'status' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Fayzulla',
            'email' => 'fayzulla@gmail.com',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
            'user_id' => 1,
        ]);
        DB::table('users')->insert([
            'name'=>'Ozodbek',
            'email'=>'ozodbekozodov0002@gmail.com',
            'password'=>Hash::make('ozodov002'),
            'role' => 'admin',
            'user_id' => 1,
            'status' => 1
        ]);
        DB::table('users')->insert([
            'name'=>'Ozodbek',
            'email'=>'ozodbekozodov0001@gmail.com',
            'password'=>Hash::make('ozodov001'),
            'role' => 'user',
            'user_id' => 5,
            'status' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Sanjar',
            'email' => 'sanjar@gmail.com',
            'password' => Hash::make('123456789'),
            'role' => 'user',
            'user_id' => 3,
            'status' => 1
        ]);
//        DB::table('users')->insert([
//            'name'=>'admin',
//            'email'=>'admin@gmail.com',
//            'password'=>Hash::make('admin'),
//        ]);
    }
}
