<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/membres';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function create()
    {

        /***********************************
         * *********************************
         * Envoi du formulaire de connexion
         * *********************************
         ***********************************/
        if(auth()->check())
            return redirect()->route('members_path');

        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
      /**********************************************
       * ********************************************
       * connection de l'utilisateur avec le remeber
       * ********************************************
       **********************************************/



       /************************************************
       *******Connexion avec le pseudo ou l'email*******
       *************************************************/
      $user = User::where('name',$request->name)
            ->orWhere('email',$request->name)
            ->first();

      if($user){

        /***************************************
        *******Verifier le mdp de l'user*******
        ****************************************/


        if(\Hash::check($request->password, $user->password))
        {
          auth()->login($user,$request->has('remember'));

          return redirect()->route('books_path');
        }
      }


        Flashy::error('Email ou mot de passe invalid');
      return redirect()->back()->withInput();

    }


    public function logout()
    {
        /***********************************
         * *********************************
         ****déconnecter l'user connecté****
         * *********************************
         ***********************************/
        auth()->logout();
        return redirect()->route('login');
    }
}
