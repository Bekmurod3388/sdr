<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomRequest;
use App\Models\Bino;
use App\Models\Floor;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Sodium\increment;

class RoomController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $role = Auth::user()->role;
        $id = Auth::user()->id;
        $users = [];
        $creater = Auth::user()->user_id;
        if ($role == 'user') {
            $data = Bino::where('user_id', $creater)->get();
            if ($data != NULL)
                foreach ($data as $value)
                    array_push($users, $value['id']);
            $data = Floor::whereIn('bino_id', $users)->get();
            $users = [];
            if ($data != NULL)
                foreach ($data as $value)
                    array_push($users, $value['id']);
//            dd($data);
            $data = Room::whereIn('floor_id', $users)->get();
        } else
            if ($role == 'admin') {
                $users_id = Room::all();
                $users_admin = User::where('user_id', $id)->get();
                $users = [0];
                $rooms = [];
                array_push($users, $id);
                if ($users_admin != NULL)
                    foreach ($users_admin as $key => $value)
                        $users[$key] = $value['id'];

                foreach ($users_id as $key => $value) {
                    for ($j = 0; $j < count($users); $j++) {
                        $binos[$key] = $value->floor->bino->user_id;
                        if ($binos[$key] == $users[$j]) {
                            array_push($rooms, $value);
                            break;
                        }
                    }
                }
                $data = (object)$rooms;
            }
        $floors = Floor::all();

        return view('admin.rooms.room', [
            'data' => $data,
            'floors' => $floors
        ]);

    }


    public function create()
    {
        $role = Auth::user()->role;
        if ($role == 'admin')
            $id = Auth::user()->id;
        elseif ($role == 'user')
            $id = Auth::user()->user_id;
        $binos = Bino::where('user_id', $id)->get();
        $floors = Floor::all();
        return view('admin.rooms.addroom', [
            'floors' => $floors,
            'binos' => $binos
        ]);

    }


    public function store(RoomRequest $request)
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

        return view('admin.rooms.edit', [
            'data' => $data,
            'isfloor' => $isfloor,
            'floors' => $floors
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
