<?php

namespace App\Http\Controllers;

use App\Models\Room;

class StudentController
{
    public function index(){
    $post=[];
        return view('admin.students.index',["posts"=>$post]);
    }
    public function create(){
        $rooms=Room::all();

        return view('admin.students.create',[
            "rooms"=>$rooms
        ]);
    }
}
