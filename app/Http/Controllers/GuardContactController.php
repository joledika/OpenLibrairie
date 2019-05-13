<?php

namespace App\Http\Controllers;

use App\GuardContact;
use Illuminate\Http\Request;
use App\Http\Requests\GuardContactRequest;

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

       return redirect()->route('home_path',[
        "message" => "Votre message à été envoyé avec succèss"
       ]
        );
    }
}
