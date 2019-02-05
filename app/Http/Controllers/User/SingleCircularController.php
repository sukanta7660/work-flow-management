<?php

namespace App\Http\Controllers\User;

use App\JobCircular;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SingleCircularController extends Controller
{
    public function index($id){
        $s_circular = JobCircular::find($id);
        $table = JobCircular::orderBy('circularID','DESC')->paginate(3);
        return view('user.singlecircular')->with(['table'=>$table,'s_circular'=>$s_circular]);
    }
}
