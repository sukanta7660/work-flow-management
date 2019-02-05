<?php

namespace App\Http\Controllers\Message;

use App\AdminReply;
use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminReplyController extends Controller
{
    //page show
    public function index(){
        $table = AdminReply::orderBy('created_at','DESC')->get();
        $employee = Employee::orderBy('employeeID','ASC')->get();
        return view('messages.adminreply')->with(['employee' => $employee, 'table' => $table]);
    }

    //send reply
    public function save(Request $request){
//        dd($request->all());
        $employee = Employee::find($request->employeeID);

        $table = new AdminReply();
        $table->employeeID = $request->employeeID;
        $table->name = $employee->user['name'];
        $table->message = $request->message;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
}
