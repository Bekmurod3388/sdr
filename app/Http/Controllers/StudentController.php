<?php

namespace App\Http\Controllers;

use App\Models\Fakultet;
use App\Models\Room;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController
{
    public function index(){
    $post=[];
        return view('admin.students.index',["posts"=>$post]);
    }
    public function create(){
        $rooms=Room::whereColumn('busy','<','count')->get();
        $fak=Fakultet::all();
        dd($rooms);
        return view('admin.students.create',[
            "rooms"=>$rooms,
            "fakultets"=>$fak
        ]);
    }
    public function store( Request $request){
       $data=new Student();
       $data->name=$request->name;
       $data->surname=$request->surname;
       $data->f_s_name=$request->f_s_name;
       $data->address=$request->address;
       $data->phone=$request->phone;
       $data->passport=$request->passport;
       $data->parent_name=$request->parent_name;
       $data->parent_phone=$request->parent_phone;
       $data->room_id=$request->room_id;
       $data->fak_id=$request->fak_id;
       $data->save();
       //busy++
        $id=$request->room_id;
        $d=Room::find($id);
        $d->busy+=1;
        $d->save();
        return redirect(route('admin.students.index'));
    }
}
