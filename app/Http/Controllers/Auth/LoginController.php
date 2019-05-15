<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/posts';

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
            return redirect()->route('posts_path');

        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {

      $result = \Auth::attempt(['email' => $request->email, 'password' => $request->password]);
      if($result)
        return redirect()->route('posts_path');


      return redirect()->back()->withErrors('identification incorrect')->withInput();

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
