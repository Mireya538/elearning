<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    // public function login () {
    //     $user = User::find();
    //     // Auth::setUser($user);
    //     Auth::login();
    //     return view('welcome');
    // }

    public function authenticate()
    {
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // $user =  Auth::user();
            // $this->roles = DB::table('usuario_rol')->get()->where('usuario_id', '=', $user->id);
            // $user.roles = DB::table('usuario_rol')->select('id')->where('usuario_id', '=', $user->id);
            return redirect();
        }
    }
}
