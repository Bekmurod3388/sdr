<?php

namespace App\Http\Controllers;

use App\Http\Requests\AttendanceRequest;
use App\Models\Attendance;
use App\Models\Bino;
use App\Models\Floor;
use App\Models\Room;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{

    public function index()
    {
        $attendances = Attendance::whereDate('created_at', Carbon::today())->OrderBy('id', 'DESC')->get();
//        dd($attendances);
        return view('admin.attendances.index', [
            'attendances' => $attendances
        ]);
    }

    public function create()
    {
        $floors = Floor::all();
        $buildings = Bino::all();
        $students = Student::OrderBy('id', 'DESC')->get();
        $rooms = Room::OrderBy('id')->get();
        return view('admin.attendances.create', [
            'students' => $students,
            'rooms' => $rooms,
            'floors' => $floors,
            'buildings' => $buildings
        ]);
    }

    public function store(AttendanceRequest $request)
    {
        $students = Student::where('room_id', $request->room)->get();
        $room_in_students = count($students);
        $students_request = $request->student;
        $cnt = 0;
        for ($i = 0; $i < $room_in_students; $i++) {
            $attendance = new Attendance();
            $attendance['student_id'] = $students[$i]['id'];
            if ($students_request != NULL)
                for ($j = 0; $j < count($students_request); $j++) {
                    if ($students[$i]['id'] == $students_request[$j]) {
                        $cnt++;
                    }
                }
            if ($cnt == 0) $attendance['check'] = 0;
            else $attendance['check'] = 1;
            $attendance['room_id'] = $request['room'];
            $attendance->save();
        }
        return redirect()->route('admin.attendances.index');
    }
}
