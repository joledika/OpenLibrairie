<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use MercurySeries\Flashy\Flashy;

class ConfirmationsController extends Controller
{
    public function store(User $user,$token)
    {
      if ($user->exists) {
        $user->update(
          [
            'email_verified_at' => now(),
            'token' => null,
          ]
        );

        Flashy::message('votre compte à été validé!!');
        return redirect('/');
      }

      Flashy::error("L'utilisateur n'existe pas!!");
      return redirect('/');
    }
}
