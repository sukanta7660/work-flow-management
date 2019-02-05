<?php

namespace App\Http\Controllers\Company;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class CompanyController extends Controller
{

    public function index(){
        $table =  Company::orderBy('companyID','DESC')->get();
        return view('company.company')->with(['table'=>$table]);
    }

    public function save(Request $request){

            $table = new Company();
            $table->name = $request->name;
            $table->phone = $request->phone;
            $table->mobile = $request->mobile;
            $table->address = $request->address;
            $table->website = $request->website;
            $table->email = $request->email;
            $table->owner = $request->owner;
            $table->save();

        return redirect()->back()->with(config('custom.save'));
    }

    public function edit(Request $request){

        $table = Company::find($request->id);

        $table->name = $request->name;
        $table->phone = $request->phone;
        $table->mobile = $request->mobile;
        $table->address = $request->address;
        $table->website = $request->website;
        $table->email = $request->email;
        $table->owner = $request->owner;
        $table->save();

        return redirect()->back()->with(config('custom.edit'));
    }

    public function del($id){
        $table = Company::find($id);
        $table->delete();
        return redirect()->back()->with(config('custom.del'));
    }

}
