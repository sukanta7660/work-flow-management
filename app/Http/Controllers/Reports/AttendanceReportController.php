<?php

namespace App\Http\Controllers\Reports;

use App\Attendance;
use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttendanceReportController extends Controller
{
    public function index(){
        $table = Employee::all();
        return view('report.attendance.attendance')->with(['table'=>$table]);
    }
    public function show(Request $request){
        $date_rang = date_time_range($request->dateRang);
        $table = Attendance::whereBetween('created_at', [$date_rang[0], $date_rang[1]])->get();

        return view('print.attendance.attendance')->with(['table' => $table, 'date_rang' =>  $request->dateRang]);
    }
    public function employee_show(Request $request){
        $employee = Employee::find($request->employeeID);

        $date_rang = date_time_range($request->dateRang);
        $pre_table = Attendance::whereBetween('created_at', [$date_rang[0], $date_rang[1]]);
        $pre_table->where('employeeID', $request->employeeID);
        $table = $pre_table->get();

        return view('print.attendance.single_employee')->with(['table' => $table, 'date_rang' =>  $request->dateRang, 'employee' => $employee]);
    }
}
