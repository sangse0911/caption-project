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
        return view('admin.master');
    }

    public function indexBook()
    {
        return view('admin.books.index');
    }

    public function showBook($id)
    {
        $array = $this->bookRepository->find($id);
        $book = $array['book'];
        $categories = $array['categories'];

        return response()->json(['book' => $book, 'categories' => $categories], 200);
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
