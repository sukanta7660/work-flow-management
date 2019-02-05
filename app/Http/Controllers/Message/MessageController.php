<?php

namespace App\Http\Controllers\Message;

use App\ContactMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index(){
        $table = ContactMessage::orderBy('contactID','DESC')->get();
        return view('messages.message')->with(['table'=>$table]);
    }
}
