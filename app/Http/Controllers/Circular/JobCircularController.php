<?php

namespace App\Http\Controllers\Circular;

use App\JobCircular;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobCircularController extends Controller
{
    public function index(){
        $table = JobCircular::orderBy('circularID','DESC')->get();
        return view('hireemployee.hireemployee')->with(['table'=>$table]);
    }
    public function save(Request $request){

//        dd($request->all());
        $table = new JobCircular();

        $table->jobTitle = $request->jobTitle;
        $table->vacancy = $request->vacancy;
        $table->jobResponsibilities = $request->jobResponsibilities;
        $table->employmentStatus = $request->employmentStatus;
        $table->edu_Requirements = $request->edu_Requirements;
        $table->exp_Requirements = $request->exp_Requirements;
        $table->addi_Requirements = $request->addi_Requirements;
        $table->jobLocation = $request->jobLocation;
        $table->salary = $request->salary;
        $table->other_Benefits = $request->other_Benefits;
        $table->deadline = db_date($request->deadline);

        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }
    public function edit(Request $request)
    {
        $table= JobCircular::find($request->id);

        $table->jobTitle = $request->jobTitle;
        $table->vacancy = $request->vacancy;
        $table->jobResponsibilities = $request->jobResponsibilities;
        $table->employmentStatus = $request->employmentStatus;
        $table->edu_Requirements = $request->edu_Requirements;
        $table->exp_Requirements = $request->exp_Requirements;
        $table->addi_Requirements = $request->addi_Requirements;
        $table->jobLocation = $request->jobLocation;
        $table->salary = $request->salary;
        $table->other_Benefits = $request->other_Benefits;
        $table->deadline = db_date($request->deadline);

        $table->save();

        return redirect()->back()->with(config('custom.edit'));
    }
    public function del($id){
        $table = JobCircular::find($id);
        $table->delete();

        return redirect()->back()->with(config('custom.del'));
    }
}
