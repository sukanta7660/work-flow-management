<?php

namespace App\Http\Controllers\Employee;

use App\Employee;
use App\SalarySheet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function index(){
        $table = SalarySheet::orderBy('created_at', 'DESC')->get();
        return view('employee.pay_slip')->with(['table' => $table]);
    }
    public function pay_option(Request $request){
        $table = Employee::find($request->employeeID);

        $balance = $table->account - $request->account;
        $table->account = $balance;

        $table->save();
        return redirect()->back()->with(config('custom.save'));
    }
}
