<?php

namespace App\Http\Controllers\User;

use App\Events;
use App\Http\Middleware\Employee;
use App\JobCircular;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserHomeController extends Controller
{
    public function index(){
        $table = JobCircular::orderBy('circularID','DESC')->paginate(6);
        $events = Events::orderBy('eventID','DESC')->paginate(3);
        return view('user.userindex')->with(['events'=>$events,'table'=>$table]);
    }
}
