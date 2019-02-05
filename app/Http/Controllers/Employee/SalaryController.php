<?php

namespace App\Http\Controllers\Employee;

use App\Company;
use App\Employee;
use App\SalaryPayment;
use App\SalarySheet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SalaryController extends Controller
{
    public function index(){
        $table = Employee::orderBy('employeeID','ASC')->get();
        return view('employee.salary')->with(['table'=>$table]);
    }

    public function sheet($id){
            $table = Employee::find($id);
            $sheet = SalarySheet::where('employeeID', $id)->get();
            return view('employee.sheet')->with(['table'=>$table, 'sheet' => $sheet]);

    }
    public function save(Request $request){

        DB::beginTransaction();
        try {
            //Update Employee
            $employee = Employee::find($request->employeeID);
            $old_balance = $employee->account;
            $payable = $request->salary;
            $employee->salary = $payable;

            $new_balance = $old_balance + $payable;
            $employee->account = $new_balance;
            $employee->nid = $request->nid;
            $employee->save();

            //Update Employee

            //Salary Sheet

            $table = new SalarySheet();
            $table->amount = $request->amount;
            $table->name = $request->name;
            $table->employeeID = $employee->employeeID;
            $table->employeeName = $employee->user['name'];
            $table->dob = $employee->dob;
            $table->address = $employee->address;
            $table->nid = $employee->nid;
            $table->created_at = db_date($request->created_at).' '.date('H:i:s');
            $table->save();
            //Salary Sheet


            if($request->amount > 0){
                //Salary Payment
                $payment = new SalaryPayment();
                $payment->employeeID = $employee->employeeID;
                $payment->salarysheetID = $table->salarysheetID;
                $payment->employeeName = $employee->user['name'];
                $payment->dob =  $employee->dob;
                $payment->address = $employee->address;
                $payment->salaryName = $request->name;
                $payment->amount = $request->amount;
                $payment->created_at = db_date($request->created_at).' '.date('H:i:s');
                $payment->save();

                //Salary Payment
            }

            DB::commit();
        } catch (\Throwable $e) {
            DB::rollback();
            throw $e;
        }
        return redirect()->to('salary/slip/'.$table->salarysheetID);

    }

    public function edit(Request $request){
        DB::beginTransaction();
        try {

            //Update Employee
            $employee = Employee::find($request->employeeID);

            $payable_old = $request->old_basicPay;
            $payable = $request->salary;
            $employee->salary = $payable;
            $old_balance = $employee->account - $payable_old;
            $new_balance = $old_balance + $payable;
            $employee->account = $new_balance;
            $employee->nid = $request->nid;
            $employee->salary = $request->salary;
            $employee->save();
            //Update Employee


            //Salary Sheet
            $table = SalarySheet::find($request->id);
            $table->amount = $request->amount;
            $table->name = $request->name;
            $table->employeeID = $employee->employeeID;
            $table->employeeName = $employee->user['name'];
            $table->dob = $employee->dob;
            $table->address = $employee->address;
            $table->nid = $employee->nid;
            $table->created_at = db_date($request->created_at).' '.date('H:i:s');
            $table->save();
            //Salary Sheet


            //Salary Payment
            $payment = SalaryPayment::where('salarysheetID', $table->salarysheetID)->update([
                'amount' => $request->amount,
                'created_at' => db_date($request->created_at).' '.date('H:i:s')
            ]);
            $salaryPay = SalaryPayment::where('salarySheetID', $table->salarySheetID)->first();

//            $salaryPayID = $salaryPay->salaryPayID;
            //Salary Payment


            DB::commit();
        } catch (\Throwable $e) {
            DB::rollback();
            throw $e;
        }
        return redirect()->to('salary/slip/'.$table->salarysheetID);
    }
    public function del($id){
        $table = SalarySheet::find($id);
            DB::beginTransaction();
            try {

                //Update Employee
                $employee = Employee::find($table->employeeID);
                $payable = $table->amount;
                $old_balance = $employee->account;
                $new_balance = $old_balance - $payable;
                $employee->account = $new_balance;
                $employee->save();
                //Update Employee

                //Salary Payment

                $salaryPay = SalaryPayment::where('employeeID', $table->employeeID)->where('salarysheetID', $id)->first();

                SalaryPayment::where('employeeID', $table->employeeID)->where('salarysheetID', $id)->delete();

                //Salary Payment


                //Delete Sheet
                $table->delete();

                DB::commit();
            } catch (\Throwable $e) {
                DB::rollback();
                throw $e;
            }

            return redirect()->back()->with(config('custom.del'));
    }

    public function slip($id){
        $table = SalarySheet::find($id);
        $company = Company::first();
        return view('print.salary.slip')->with(['table'=>$table,'company'=>$company]);

    }
}
