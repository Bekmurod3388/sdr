<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Room;
use App\Models\Student;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{

    public function index(){
        $attendances = Attendance::OrderBy('created_at', 'DESC')->get();
//        dd($attendances);
        return view('admin.attendances.index', [
            'attendances' => $attendances
        ]);
    }

    public function create(){
        $floors = Room::groupBy('floor')->get();
        $students = Student::OrderBy('id', 'DESC')->get();
        $rooms = Room::OrderBy('id')->get();
        return view('admin.attendances.create',[
            'students' => $students,
            'rooms' => $rooms,
            'floors' => $floors
        ]);
    }

    public function store(){
        dd('store');
    }
}
