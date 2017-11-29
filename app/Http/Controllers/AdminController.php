<?php

namespace App\Http\Controllers;

use App\Interfaces\AdminInterface;
use App\Interfaces\BookInterface;
use App\Models\Admin;

class AdminController extends Controller
{

    protected $adminRepository;
    protected $bookRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AdminInterface $adminRepository,
        BookInterface $bookRepository) {
        // $this->middleware('auth:admin', ['except' => 'adminLogout']);
        $this->adminRepository = $adminRepository;
        $this->bookRepository = $bookRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * [listAllManager description]
     * @return [type] [description]
     */
    public function listAllManager()
    {
        $admins = $this->adminRepository->all();
        return view('admin.managers.index', compact('admins'));
    }

    /**
     * [indexBook description]
     * @return [type] [description]
     */
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
