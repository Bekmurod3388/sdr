<?php

namespace App\Http\Controllers;

use App\Models\StudentInfo;
use App\Models\Fakultet;
use Illuminate\Http\Request;

class StudentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Fakultet::all();
        return view('admin.studentinfo.index',[
            'posts'=>$posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.studentinfo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Fakultet();
        $data->name=$request->name;
        $data->save();
        return redirect(route('admin.student_info.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentInfo  $studentinfo
     * @return \Illuminate\Http\Response
     */
    public function show(StudentInfo $studentinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentInfo  $studentinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentInfo $studentinfo,$id)
    {
     $post=Fakultet::find($id);
     return view('admin.studentinfo.edit',[
         'post'=>$post
     ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentInfo  $studentinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $post=Fakultet::find($id);
        $post->id=$id;
        $post->name=$request->name;
        $post->save();

        $posts=Fakultet::all();
        return view('admin.studentinfo.index',[
            'posts'=>$posts
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentInfo  $studentinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentInfo $studentinfo,$id)
    {
        $data=Fakultet::find($id);
        $data->delete();
        return redirect(route('admin.student_info.index'));
    }
}
