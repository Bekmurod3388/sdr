<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {

        $data = Room::orderBy('room_number', 'ASC')->paginate(5);
        $floors = Floor::all();

        return view('admin.rooms.room',[
            'data'=>$data,
            'floors'=>$floors
        ]);

    }


    public function create(){

        $floors = Floor::all();
        return view('admin.rooms.addroom',compact('floors'));

    }


    public function store(Request $request)
    {

        $data = new Room();
        $data->room_number = $request->number;
        $data->count = $request->count;
        $data->floor_id = $request->floor_id;
        $data->save();

        return redirect(route('admin.rooms.index'));
    }


    public function edit($id)
    {

        $data = Room::find($id);
        $isfloor = Floor::find($data->floor_id);
        $floors = Floor::all();

        return view('admin.rooms.edit',[
            'data'=>$data,
            'isfloor'=>$isfloor,
            'floors'=>$floors
        ]);
    }


    public function update(Request $request, $id)
    {

        $data = Room::find($id);
        $data->room_number = $request->number;
        $data->count = $request->count;
        $data->floor_id = $request->floor_id;
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
