<?php

namespace App\Http\Controllers\User;

use App\AdminReply;
use App\Attendance;
use App\ContactMessage;
use App\Employee;
use App\Events;
use App\LeaveRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        $employee = Employee::where('userID',Auth::user()->id)->first();
        $attendance = Attendance::where('userID',Auth::user()->id)->orderBy('attendanceID','DESC')->get();
        $ckdate = Attendance::select('inTime')->where('userID',Auth::user()->id)->whereDate('inTime',date('Y-m-d'))->first();
        $notice = Events::orderBy('eventID','DESC')->get();
        $leave_request = LeaveRequest::where('userID',Auth::user()->id)->orderBy('leaverequestID','DESC')->get();
        $message = ContactMessage::where('userID',Auth::user()->id)->orderBy('contactID','DESC')->get();
        $adminsms = AdminReply::orderBy('created_at','DESC')->where('employeeID',$employee->employeeID)->get();
        $table = Employee::where('userID',Auth::user()->id)->first();
        return view('user.userprofile')->with(['table'=>$table,'ckdate'=>$ckdate, 'user'=>$user,'notice'=>$notice,'message'=>$message,'leave_request'=>$leave_request,'attendance'=>$attendance,'adminsms'=>$adminsms,'employee'=>$employee]);
    }

    //update profile

    public function update_profile(Request $request){
        $user_id = Auth::user()->id;
        $employee = Employee::where('userID',$user_id)->first();

        if ($employee != null)
        {
            $table = Employee::find($employee->employeeID);
            $table->position = $request->position;
            $table->mobile = $request->mobile;
            $table->nid = $request->nid;
//            $table->gender = $request->gender;
//            $table->dob = $request->dob;
            $table->father = $request->father;
            $table->mother = $request->mother;
            $table->postCode = $request->postCode;
            $table->address = $request->address;
            $table->city = $request->city;
            $table->country = $request->country;




            //image upload
            if ($request->hasFile('imageName')) {

                $extnshon = $request->imageName->extension();
                $filename =  md5(date('Y-m-d H:i:s'));
                $filename = $filename.'.'.$extnshon;

                $table->imageName = $filename;

                $request->imageName->move('public/uploads',$filename);
            }

            $table->save();
        }else{
            $table = new Employee();
            $table->position = $request->position;
            $table->mobile = $request->mobile;
            $table->nid = $request->nid;
//            $table->gender = $request->gender;
//            $table->dob = $request->dob;
            $table->father = $request->father;
            $table->mother = $request->mother;
            $table->postCode = $request->postCode;
            $table->address = $request->address;
            $table->city = $request->city;
            $table->country = $request->country;


//            image upload
            if ($request->hasFile('imageName')) {

                $extnsion = $request->imageName->extension();
                $filename =  md5(date('Y-m-d H:i:s'));
                $filename = $filename.'.'.$extnsion;

                $table->imageName = $filename;

                $request->imageName->move('public/uploads',$filename);
            }

            $table->save();
        }


      return redirect()->back();
    }

//update Birthday

    public function update_birthday(Request $request){
        $user_id = Auth::user()->id;
        $employee = Employee::where('userID',$user_id)->first();

        if ($employee != null)
        {
            $table = Employee::find($employee->employeeID);
            $table->dob = $request->dob;
            $table->gender = $request->gender;

            $table->save();
        }else{
            $table = new Employee();
            $table->dob = $request->dob;
            $table->gender = $request->gender;
            $table->save();
        }


        return redirect()->back();
    }

    //contact message

    public function message(Request $request){
//        dd($request->all());
        $table = new ContactMessage();
        $table->employeeID = $request->employeeID;
        $table->name = $request->name;
        $table->email = $request->email;
        $table->subject = $request->subject;
        $table->message = $request->message;
        $table->save();

        return redirect()->back();
    }

    //Leave Request

    public function leave_request(Request $request){
//        dd($request->all());
        $table = new LeaveRequest();
        $table->employeeID = $request->employeeID;
        $table->subject = $request->subject;
        $table->name = $request->name;
        $table->status = 'Pending';
        $table->description = $request->description;
        $table->sincerely = $request->sincerely;
        $table->save();

        return redirect()->back();
    }


    //Attendance

    public function attendance_in(Request $request){
//        dd($request->all());
        $table = new Attendance();

        $table->employeeID = $request->employeeID;
        $table->inTime = date('Y-m-d h:i:s');
        $table->save();

        return redirect()->back();
    }

    public function attendance_out(Request $request){
//        dd($request->all());
        $table= Attendance::find($request->id);
        $table->outTime = date('Y-m-d h:i:s');
        $table->save();

        return redirect()->back();
    }
}
