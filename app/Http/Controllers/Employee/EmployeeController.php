<?php
namespace App\Http\Controllers\Employee;

use App\User;
use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function index(){
        $user = User::all();
        $table = Employee::orderBy('employeeID','DESC')->get();
        return view('employee.employee')->with(['user'=>$user,'table'=>$table]);
    }
    public function edit(Request $request){
        $table= Employee::find($request->id);

        $table->position = $request->position;
        $table->mobile = $request->mobile;
        $table->nid = $request->nid;
        $table->dob = db_date($request->dob);
        $table->salary = $request->salary;
        $table->father = $request->father;
        $table->mother = $request->mother;
        $table->postCode = $request->postCode;
        $table->address = $request->address;
        $table->city = $request->city;
        $table->country = $request->country;
        $table->save();

        return redirect()->back()->with(config('custom.edit'));
    }
    public function del($id){
        $table = Employee::find($id);
        $table->delete();

        return redirect()->back()->with(config('custom.del'));
    }
}
