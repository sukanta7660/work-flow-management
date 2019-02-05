<?php

namespace App\Http\Controllers;

use App\Company;
use App\Events;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        //Check Company Info exist
        $company = Company::orderBy('companyID', 'DESC')->paginate(1);
        //Check Company Info exist
        $table = Events::orderBy('eventID', 'DESC')->paginate(3);
        return view('main')->with(['table'=>$table,'company'=>$company]);
    }
}
