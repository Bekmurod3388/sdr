<?php

namespace App\Http\Controllers;
use App\Http\Requests\FloorRequest;
use App\Models\Bino;
use App\Models\Floor;
use App\Models\Room;
use Illuminate\Http\Request;

class FloorController extends Controller
{


    public function index()
    {
        $data = Floor::paginate(10);
        return view('admin.floors.floor',['data'=>$data]);
    }

    public function create(){
        $buildings = Bino::all();
        return view('admin.floors.addfloor',['buildings'=>$buildings]);

    }

    public function store(FloorRequest $request)
    {
        Floor::create($request->all());
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
