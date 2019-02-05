<?php

namespace App\Http\Controllers\Leave;

use App\LeaveRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LeaveRequestController extends Controller
{
    public function index(){
        $table = LeaveRequest::orderBy('leaverequestID','DESC')->get();
        return view('leave.leave_request')->with(['table'=>$table]);
    }
    public function accept(Request $request){
        $table= LeaveRequest::find($request->id);
        $table->status = 'Accepted';
        $table->save();

        return redirect()->back()->with(config('custom.edit'));
    }
    public function reject(Request $request){
        $table= LeaveRequest::find($request->id);
        $table->status = 'Rejected';
        $table->save();

        return redirect()->back()->with(config('custom.del'));
    }

}
