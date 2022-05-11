<?php

namespace App\Http\Controllers;
use App\Http\Requests\FloorRequest;
use App\Models\Floor;
use App\Models\Room;
use Illuminate\Http\Request;

class FloorController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {

        $data = Floor::orderBy('floor', 'ASC')->paginate(5);

        return view('admin.floors.floor',compact('data'));
    }

    public function create(){

        return view('admin.floors.addfloor');

    }


    public function store(FloorRequest $request)
    {

        $data = new Floor();
        $data->floor = $request->floor;
        $data->save();

        return redirect(route('admin.floors.index'));
    }

    public function edit($id)
    {

        $data = Floor::find($id);
        return view('admin.floors.editfloor',compact('data'));

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
