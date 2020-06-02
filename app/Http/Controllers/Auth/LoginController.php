<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //改用username(帳號)進行登入
    public function username()
    {
        return 'name';
    }

    public function redirectToProvider($provider)
    {
        //透過感應器來取得用戶
        $user = Socialite::driver($provider)->user();
        //透過用戶和供應器來尋找或建立用戶
        $authUser = $this->findOrCreateUser($user, $provider);
        //進行登入並開啟記得我
        Auth::login($authUser, true);

        return redirect($this->redirectto);
    }

}
