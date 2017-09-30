<?php

namespace App\Http\Controllers;

use App\Interfaces\UserInterface;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * [$userService description]
     * @var [type]
     */
    protected $userService;

    /**
     * [__construct description]
     * @param UserInterface $userService [description]
     */
    public function __construct(UserInterface $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userService->getAll();
        return view('users.index', compact('users'));
    }

    public function indexApi()
    {
        return $this->userService->getByApi();
        // return view('api.user.index', compact('users'));
    }

    public function getContent()
    {
        return view('users.content');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $this->userService->save($request->all());
        return redirect()->route('admin.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeUser(Request $request)
    {
        $user = $this->userService->save($request->all());
        return redirect()->route('supplier.create')->with(['user' => $user]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = $this->userService->getById();
        return view('users.index', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->userService->getById($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = $this->userService->modifired($request->all());
        return redirect()->route('user_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = $this->userService->delete($request->id);
        return redirect()->route('user_admin');
    }
}
