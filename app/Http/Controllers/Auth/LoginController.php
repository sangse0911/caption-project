<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Socialite;
use Validator;

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
        $this->middleware('guest')->except(['logout']);
    }

    /**
     * [postLogin description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function postLogin(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:2',
        ];

        $messages = [

            'email.required' => 'Vui lòng nhập địa chỉ email',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Vui lòng kiểm tra lại',
            'password.min' => 'Mật khẩu ít nhất 6 kí tự',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validator->errors(),
            ], 200);
        } else {
            $email = $request->email;
            $password = $request->password;

            if (Auth::attempt([

                'email' => $email,
                'password' => $password,
            ], $request->has('remember'))) {

                return response()->json([
                    'error' => false,
                    'message' => 'success',
                ], 200);
            } else {
                $errors = new MessageBag(['errorLogin' => 'Email hoặc mật khẩu không đúng']);
                return response()->json([

                    'error' => true,
                    'message' => $errors,
                ], 200);
            }
        }
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

            $user->facebook_id = $socialUser->getID();
            $user->email = $socialUser->getEmail();
            $user->name = $socialUser->getName();
            $user->password = bcrypt(str_random(10));
            $user->save();

            auth()->login($user);
            return redirect()->to('/');
        }
        return redirect('/');
    }
     public function logout()
    {
     auth()->logout();
     return redirect('/');
 }
}
