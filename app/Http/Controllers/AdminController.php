<?php

namespace App\Http\Controllers;

use App\Interfaces\AdminInterface;
use App\Models\Admin;

class AdminController extends Controller
{

    protected $adminRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AdminInterface $adminRepository)
    {
        $this->middleware('auth:admin', ['except' => 'adminLogout']);
        $this->adminRepository = $adminRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.master');
    }

    public function indexBook()
    {
        return view('admin.books.index');
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'job_title' => 'admin',
        ]);
    }
}
