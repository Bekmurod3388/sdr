<?php

namespace App\Http\Controllers;

use App\Http\Requests\BinoRequest;
use App\Models\Floor;
use App\Models\Room;
use App\Models\Bino;
use App\Models\User;
use Illuminate\Http\Request;

class BinoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $data = Bino::all();
        $users = User::all();

        return view('admin.binos.bino' , [
            'data'=>$data,
            'users'=>$users
        ]);

    }

    public function create()
    {
        $users = User::all();

        return view('admin.binos.addbino' , [
            'users'=>$users
        ]);


    }


    public function store(BinoRequest $request)
    {

        $data = new Bino();
        $data->name = $request->name;
        $data->user_id = $request->user_id;
        $data->save();

        return redirect(route('admin.binos.index'));
    }

    public function edit($id)
    {

        $data = Bino::find($id);
        $isUser = User::find($data->user_id);
        $users = User::all();

        return view('admin.binos.editbino' , [
            'data'=>$data,
            'isUser'=>$isUser,
            'users'=>$users
        ]);

    }


    public function update(Request $request, $id)
    {

        $data = Bino::find($id);
        $data->name = $request->name;
        $data->user_id = $request->user_id;
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
