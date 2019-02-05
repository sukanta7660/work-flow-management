<?php

namespace App\Http\Controllers\Events;

use App\Events;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    public function index(){
        $table = Events::orderBy('eventID', 'DESC')->get();
        return view('events.events')->with([ 'table'=>$table]);
    }


    public function save(Request $request){
        $table = new Events();
        $table->doe = db_date($request->doe);
        $table->toe = $request->toe;
        $table->title = $request->title;
        $table->venue = $request->venue;
        $table->description = $request->description;
        $table->save();

        return redirect()->back()->with(config('custom.save'));
    }

    public function edit(Request $request)
    {
        $table= Events::find($request->id);
        $table->doe = db_date($request->doe);
        $table->toe = $request->toe;
        $table->title = $request->title;
        $table->venue = $request->venue;
        $table->description = $request->description;
        $table->save();

        return redirect()->back()->with(config('custom.edit'));
    }

    public function del($id){
        $table = Events::find($id);
        $table->delete();

        return redirect()->back()->with(config('custom.del'));
    }
}
