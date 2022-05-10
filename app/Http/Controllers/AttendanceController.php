<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function create(){
        return view('admin.attendances.create');
    }
    public function store(){
        dd('store');
    }
}
