<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy as flashy;

class UsersController extends Controller
{
    public function index()
    {
        /******************************************************
         *
         *Récuperation des utilisateur et renvoyer vers la vue
         *
         ******************************************************/
        $users = User::get();
        return view('pages/membres/index',compact('users'));
    }

    public function show($id)
    {
        $user = User::where('id' , $id)->with(['profile','contact'])->first();
        return view('pages/membres/show',compact('user'));
    }

    public function create($id)
    {
        $user = User::where('id' , $id)->with(['profile'])->first();

        return view('pages/membres/edit',compact('user'));
    }

    public function update(Request $request,$id)
    {

        $user = User::where('id' , $id)->first();

        if(isset($request->picture)){

            $img = $request->file('picture')->store('users/image','public');
            $user->profile->update(
                [

                    'picture' => $img,
                    'address'=>$request->address,
                    'birth'=>$request->birth,
                    'description'=>$request->description,
                    'firstName'=>$request->firstName,
                    'lastName'=>$request->lastName,
                    'gender'=>$request->gender,

                ]

            );
        }else{
            $user->profile->update(
                [


                    'address'=>$request->address,
                    'birth'=>$request->birth,
                    'description'=>$request->description,
                    'firstName'=>$request->firstName,
                    'lastName'=>$request->lastName,
                    'gender'=>$request->gender,

                ]

            );
        }
        $user->update([
            'name'=>$request->name
        ]);

        $user->contact->update([
            'facebook'=>$request->facebook,
            'github'=>$request->github,
            'youtube'=>$request->youtube,
            'twitter'=>$request->twitter,
        ]);

         /**********************************************************
         * ***********petite message de notification****************
         **********************************************************/
        flashy()->success('Modification éffectué');

        return redirect()->route('profile_path',$user->id);
    }
}
