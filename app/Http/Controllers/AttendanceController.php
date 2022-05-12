<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Bino;
use App\Models\Floor;
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
        $floors = Floor::all();
        $buildings = Bino::all();
        $students = Student::OrderBy('id', 'DESC')->get();
        $rooms = Room::OrderBy('id')->get();
        return view('admin.attendances.create',[
            'students' => $students,
            'rooms' => $rooms,
            'floors' => $floors,
            'buildings'=>$buildings
        ]);
    }

    public function store(){
        dd('store');
    }
}
