<?php

namespace App\Http\Controllers;

use App\Http\Requests\BinoRequest;
use App\Models\Floor;
use App\Models\Room;
use App\Models\Bino;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BinoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $role = Auth::user()->role;
        $id = Auth::user()->id;
       if ($role == 'admin') {
            $users_id = Bino::where('user_id', $id)->get();
            $users = [0];
            if (!empty($users_id)) {
                foreach ($users_id as $id => $value)
                    $users[$id] = $value['user_id'];
                $data = Bino::whereIn('user_id', $users)->get();
            } else $data = Bino::all();
        }
        return view('admin.binos.bino', [
            'data' => $data,
        ]);

    }

    public function create()
    {
        $users = User::all();

        return view('admin.binos.addbino', [
            'users' => $users
        ]);


    }


    public function store(BinoRequest $request)
    {
        $id = Auth::user()->id;
        $data = new Bino();
        $data->name = $request->name;
        $data->user_id = $id;
        $data->save();

        return redirect(route('admin.binos.index'));
    }

    public function edit($id)
    {

        $data = Bino::find($id);
        $isUser = User::find($data->user_id);
        $users = User::all();

        return view('admin.binos.editbino', [
            'data' => $data,
            'isUser' => $isUser,
            'users' => $users
        ]);

    }


    public function update(Request $request, $id)
    {

        $data = Bino::find($id);
        $data->name = $request->name;
        $data->save();

        return redirect(route('admin.binos.index'));


    }

    public function destroy($id)
    {

        $data = Bino::find($id);
        $data->delete();

        return redirect(route('admin.binos.index'));

    }


}
