<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminAccountController extends Controller
{
    public function index(Request $request)
    {
        if (isset($request->recherche)) {
            $recherche = $request->recherche;

            $users = User::where('name','like',"%$recherche%")
                        ->orWhere('email','like',"%$recherche%")
                        ->latest()
                        ->get();
        return view('administration/compte/index',compact('users','recherche'));
        }
        $users = User::latest()->paginate(15);
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


    public function destroy($user)
    {
        $deleting = User::where('id',$user)->firstOrFail();

        $deleting->delete();

        \Flashy::info('Utilisateur supprimé');

        return back();
    }
}
