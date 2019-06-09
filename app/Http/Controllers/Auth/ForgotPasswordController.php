<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordRequest;
use App\User;
use App\Notifications\ResetPasswordUser;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
      return view('auth.reset_password');
    }

    public function check(Request $request)
    {
      if($request->name===null){
        \Flashy::error('veillez remplir le champ');
        return back();
      }
      $user = User::where('name',$request->name)
                    ->orWhere('email',$request->name)
                    ->firstOrFail();
      \Notification::send($user,new ResetPasswordUser());

      \Flashy::success('Un mail de réinitialisation de mot de passe est envoyeé vers ton mail!');

      return redirect('/');
    }

    public function sendMail()
    {

    }


    public function newPass($user,$token)
    {
      $user = User::where('name',$user)->firstOrFail();


      if($token==$user->remember_token)
        return view('auth.newPass')->with('user', $user);

      return abort(404);
    }

    public function editPass(ResetPasswordRequest $request, $user)
    {
      $user = User::where('name',$user)->orWhere('email',$user)->orWhere('id',$user)->firstOrFail();
      $user->update(
        [
          'password' => bcrypt($request->password)
        ]
      );

      \Flashy::success('Ton mot de passe a été réinitialisé');
      return redirect()->route('login');
    }
}
