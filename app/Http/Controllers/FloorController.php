<?php

namespace App\Http\Controllers;

use App\Http\Requests\FloorRequest;
use App\Models\Bino;
use App\Models\Floor;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FloorController extends Controller
{


    public function index()
    {
        $role = Auth::user()->role;
        $id = Auth::user()->id;
        $creater = Auth::user()->user_id;
        $users = [];
        if ($role == 'user') {
            $data = Bino::where('user_id', $creater)->get();
            if ($data != NULL)
                foreach ($data as $value)
                    array_push($users, $value['id']);
//            dd($users);
            $data = Floor::whereIn('bino_id', $users)->get();
        } else if ($role == 'admin') {
            $users_id = Floor::all();
            $users_admin = User::where('user_id', $id)->get();
            $users = [0];
            $rooms = [];
            array_push($users, $id);
            if ($users_admin != NULL)
                foreach ($users_admin as $key => $value)
                    $users[$key] = $value['id'];

            foreach ($users_id as $key => $value) {
                for ($j = 0; $j < count($users); $j++) {
                    $binos[$key] = $value->bino->user_id;
                    if ($binos[$key] == $users[$j]) {
                        array_push($rooms, $value);
                        break;
                    }
                }
            }
            $data = (object)$rooms;
        }
        return view('admin.floors.floor', ['data' => $data]);
    }

    public function create()
    {
        $role = Auth::user()->role;
        if ($role == 'admin')
            $id = Auth::user()->id;
        elseif ($role == 'user')
            $id = Auth::user()->user_id;
        $buildings = Bino::where('user_id', $id)->get();
        return view('admin.floors.addfloor', ['buildings' => $buildings]);
    }

    public function store(FloorRequest $request)
    {
        Floor::create($request->all());
        return redirect(route('admin.floors.index'));
    }

    public function edit($id)
    {

        $data = Floor::find($id);
        return view('admin.floors.editfloor', compact('data'));

    }


    public function update(Request $request, $id)
    {

        $data = Floor::find($id);
        $data->floor = $request->floor;
        $data->save();

        return redirect(route('admin.floors.index'));


    }

    public function destroy($id)
    {

        $data = Floor::find($id);
        $data->delete();

        return redirect(route('admin.floors.index'));

    }


}
