<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminAccountController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('administration/compte/index',compact('users'));
    }
}
