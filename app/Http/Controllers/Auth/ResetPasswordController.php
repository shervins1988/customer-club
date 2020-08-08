<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\User;
use App\PasswordReset;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
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

    public function reset()
    {
        request()->validate([
            'token' => 'required',
            'password' => 'required|string|min:8|max:40|confirmed',
        ]);

        $pr = PasswordReset::where('token',request('token'))->first();
        $user = User::where('mobile',$pr->mobile)->first();
        $user->update_password(request('password'));
        return redirect('login');

    }

    public function showResetForm($token)
    {
        return view('auth.passwords.reset', compact('token'));
    }
}
