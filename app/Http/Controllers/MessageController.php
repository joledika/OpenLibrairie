<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function index()
    {
      $messages = Message::where('userExp_id',auth()->user()->id)->get();

      return view('pages/contacts/index',compact('messages'));
    }
}
