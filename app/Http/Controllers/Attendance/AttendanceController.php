<?php

namespace App\Http\Controllers\Attendance;

use App\Attendance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
    public function index(){
        $table = Attendance::orderBy('attendanceID','DESC')->get();
        return view('attendance.attendance')->with(['table'=>$table]);
    }
}
