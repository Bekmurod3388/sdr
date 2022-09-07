<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'Asadbek',
            'surname' => "Po'latov",
            'f_s_name' => " ",
            'address' => "Xorazm viloyati",
            'passport' => "AA1234145",
            'phone' => "+998919846045",
            'parent_name' => " ",
            'parent_phone' => " ",
            'room_id' => 2,
            'fak_id' => 2,
            'user_id' => 2,
        ]);
        DB::table('students')->insert([
            'name' => 'Beksulton',
            'surname' => "Abdurahmonov",
            'f_s_name' => "",
            'address' => "Surxandaryo viloyati",
            'passport' => "AA1234140",
            'phone' => "+998900900971",
            'parent_name' => " ",
            'parent_phone' => " ",
            'room_id' => 2,
            'fak_id' => 2,
            'user_id' => 2,
        ]);
        DB::table('students')->insert([
            'name' => 'Ozodbek',
            'surname' => "Ozodov",
            'f_s_name' => "",
            'address' => "Xorazm viloyati",
            'passport' => "AA1234144",
            'phone' => "+998900900977",
            'parent_name' => " ",
            'parent_phone' => " ",
            'room_id' => 3,
            'fak_id' => 2,
            'user_id' => 2,
        ]);
        DB::table('students')->insert([
            'name' => 'Diyorbek',
            'surname' => "Boltayev",
            'f_s_name' => "",
            'address' => "Xorazm viloyati",
            'passport' => "AA1234150",
            'phone' => "+998900500971",
            'parent_name' => " ",
            'parent_phone' => " ",
            'room_id' => 3,
            'fak_id' => 2,
            'user_id' => 2,
        ]);
        DB::table('students')->insert([
            'name' => 'Yulduz',
            'surname' => "Sultanova",
            'f_s_name' => "",
            'address' => "Xorazm viloyati",
            'passport' => "AA1234140",
            'phone' => "+998900900921",
            'parent_name' => " ",
            'parent_phone' => " ",
            'room_id' => 1,
            'fak_id' => 2,
            'user_id' => 2,
        ]);
        DB::table('students')->insert([
            'name' => 'Shaydo',
            'surname' => "Alimboyeva",
            'f_s_name' => "",
            'address' => "Navoiy viloyati",
            'passport' => "AA1214140",
            'phone' => "+998910925971",
            'parent_name' => " ",
            'parent_phone' => " ",
            'room_id' => 1,
            'fak_id' => 2,
            'user_id' => 2,
        ]);
        DB::table('students')->insert([
            'name' => 'Fayzulla',
            'surname' => "Xo'janiyazov",
            'f_s_name' => "",
            'address' => "Xorazm viloyati",
            'passport' => "AA1237140",
            'phone' => "+998884470971",
            'parent_name' => " ",
            'parent_phone' => " ",
            'room_id' => 3,
            'fak_id' => 2,
            'user_id' => 2,
        ]);
        DB::table('students')->insert([
            'name' => 'Sanjar',
            'surname' => "Kalandarov",
            'f_s_name' => "",
            'address' => "Qoraqalpog'iston respublikasi",
            'passport' => "AC5234140",
            'phone' => "+998900900881",
            'parent_name' => " ",
            'parent_phone' => " ",
            'room_id' => 3,
            'fak_id' => 2,
            'user_id' => 2,
        ]);
        DB::table('students')->insert([
            'name' => 'Latofat',
            'surname' => "Boltaboyeva",
            'f_s_name' => "",
            'address' => "Xorazm viloyati",
            'passport' => "AA2534140",
            'phone' => "+998918980921",
            'parent_name' => " ",
            'parent_phone' => " ",
            'room_id' => 4,
            'fak_id' => 3,
            'user_id' => 3,
        ]);
        DB::table('students')->insert([
            'name' => 'Shahnoza',
            'surname' => "Matkarimova",
            'f_s_name' => "",
            'address' => "Xorazm viloyati",
            'passport' => "AC8714140",
            'phone' => "+998940975871",
            'parent_name' => " ",
            'parent_phone' => " ",
            'room_id' => 4,
            'fak_id' => 3,
            'user_id' => 3,
        ]);
    }
}
