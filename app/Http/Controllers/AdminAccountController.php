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

    public function change($user)
    {
        $user = User::where('id',$user)->firstOrFail();


        if($user->account_id == 1){
            $user->update([
                'account_id' => 2
            ]
            );
        \Flashy::message("Le type de compte de $user->name est maintenant en membre");

        }elseif($user->account_id == 2){
            $user->update([
                'account_id' => 1
            ]
            );
        \Flashy::message("Le type de compte de $user->name est maintenant en administrateur");
        }


        return redirect()->route('admin_account_path');
    }
}
