<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Http\Controllers\TextMessageController;
use App\User;
use App\PasswordReset;

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

    public function showLinkRequestForm()
    {
        return view('auth.passwords.mobile');
    }

    public function SendRestToken()
    {
        request()->validate([
            'mobile' => 'required|exists:users,mobile'
        ]);
        $check = PasswordReset::check(request('mobile'));
        if ($check) {
            $user = User::where('mobile',request('mobile'))->first();
            $password_reset = PasswordReset::make($user);
            $body = "کد $password_reset->token جهت بازیابی رمز عبور.";
            TextMessageController::send(request('mobile'),$body);
            return redirect('password/token');
        }else {
            return back()->withErrors(['لطفا" 2 دقیقه دیگر مجددا" سعی نمایید.'])->withInput();
        }

    }

    public function showInputCodeForm()
    {
        return view('auth.passwords.token');
    }

    public function resetPassword()
    {
        request()->validate([
         'token' => 'required',
        ]);
        $found = PasswordReset::where('token',request('token'))->first();
        if ($found) {
            return redirect( "password/reset/".request('token') );
        }else {
            return back()->withErrors(['کد وارد شده معتبر نمی باشد.'])->withInput()->withMobile(request('mobile'));
        }
    }
}
