<?php

namespace App\Http\Controllers;

use App\GuardContact;
use Illuminate\Http\Request;
use App\Http\Requests\GuardContactRequest;
use MercurySeries\Flashy;


class GuardContactController extends Controller
{
    public function store(GuardContactRequest $request)
    {
         /******************************************************
         *
         *Enregistration des message dans la table GUARDCONTACT*
         *
         ******************************************************/

        GuardContact::create($request->all());
        /******************************
        *******************************
        *message flash sur la page home
        *******************************
        *******************************/
        \Flashy::success('Votre message à été envoyé avec succèss');

       return redirect()->route('home_path');
    }


    public function index(Request $request)
    {
      if ($request->recherche) {
        $recherche = $request->recherche;

        $messages = GuardContact::where('name','like',"%$recherche%")
                                  ->orWhere('subject','LIKE',"%$recherche%")
                                  ->orWhere('created_at','LIKE',"%$recherche%")
                                  ->orWhere('email','LIKE',"%$recherche%")
                                  ->get();

        return view('administration/mails/index',compact('messages','recherche'));
      }else{
        $messages = GuardContact::latest()->paginate(10);
        return view('administration/mails/index',compact('messages'));

      }

    }

    public function show($id)
    {
      $message = GuardContact::where('id',$id)->firstOrFail();

      return view('administration/mails/show',compact('message'));
    }

    public function destroy($id)
    {
      $message = GuardContact::where('id',$id)->firstOrFail();

      $message->delete();

      \Flashy::success('Suppression éffectué!');
      return redirect()->route('admin_guard_contact_path');
    }
}
