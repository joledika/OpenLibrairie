<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Contact;
use App\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Validator;
use MercurySeries\Flashy\Flashy as flashy;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    public function create()
    {
        /***********************************
         * *********************************
         * Envoi du formulaire d'inscription
         * *********************************
         ***********************************/

        return view('auth.register');
    }
    public function store(RegisterRequest $request)
    {
        /***********************************
         * *********************************
         ***Enregistrement des utilisateur**
         * *********************************
         ***********************************/
        //


       $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'token' => $request->_token,
            'account_id'=> 2,
            'remember_token'=>str_random(60),

            ]);

            Profile::create([
                'user_id'=>$user->id,
                'gender'=>'male',

            ]);

            Contact::create(
                [
                    'user_id'=>$user->id
                ]
            );

            \Mail::to($user)->send(new RegisterMail($user));

        flashy()->success('Votre inscription est belle et bien effectué avec succéss',route('login'));

        return redirect()->route('home_path');
    }
}
