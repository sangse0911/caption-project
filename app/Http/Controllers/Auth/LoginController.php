<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;

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
        $this->middleware('guest')->except(['logout', 'adminLogout']);
    }

    /**
     * Redirect the user to the facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        try {
            $socialUser = Socialite::driver('facebook')->user();
        } catch (Exception $e) {
            return redirect('/');
        }
        $findUser = User::where('facebook_id', $socialUser->getID())->first();

        if ($findUser) {

            auth()->login($findUser);

        } else {
            $user = new User;
            User::create([
                'facebook_id' => $socialUser->getID(),
                'email' => $socialUser->getEmail(),
                'name' => $socialUser->getName(),
                'password' => bcrypt(str_random(10)),
            ]);
            auth()->login($user);
        }
        return redirect('/');
    }
}
