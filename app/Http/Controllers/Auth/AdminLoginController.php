<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserLoginRequest;
use Auth;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        // $this->middleware('admin',['except' => 'adminLogout']);
    }
    /**
     * [showLoginForm description]
     * @return [type] [description]
     */
    public function showLoginForm()
    {
        if (!Auth::guard('admin')->check()) {
            return view('admin.login.dangnhapquantri');
        } else {
            return redirect()->intended(route('admin.index'));
        }
    }

    /**
     * [login description]
     * @return [type] [description]
     */
    public function login(StoreUserLoginRequest $request)
    {

        if (Auth::guard('admin')->attempt(
            [
                'email' => $request->email,
                'password' => $request->password,
            ],
            $request->remember)) {
            return redirect()->intended(route('admin.index'));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    /**
     * [adminLogout description]
     * @return [type] [description]
     */
    public function adminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

}
