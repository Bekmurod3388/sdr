<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {

        $data = Room::all();

        return view('admin.rooms.room',compact('data'));
    }


    public function create(){

        return view('admin.rooms.addroom');

    }


    public function store(Request $request)
    {

        $data = new Room();
        $data->room_number = $request->number;
        $data->count = $request->count;
        $data->floor = $request->floor;
        $data->save();

        return redirect(route('admin.rooms.index'));

    }


    public function edit($id)
    {

        $data = Room::find($id);
        return view('admin.rooms.edit',compact('data'));

    }


    public function update(Request $request, $id)
    {

        $data = Room::find($id);
        $data->room_number = $request->number;
        $data->count = $request->count;
        $data->floor = $request->floor;
        $data->save();

        return redirect(route('admin.rooms.index'));

    }

    public function destroy($id)
    {

        $data = Room::find($id);
        $data->delete();

        return redirect(route('admin.rooms.index'));

    }
}
