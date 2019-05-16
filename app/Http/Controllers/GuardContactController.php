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
}
