<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCreateUserRequest;
use App\Interfaces\UserInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * [$userService description]
     * @var [type]
     */
    protected $userRepository;

    /**
     * [__construct description]
     * @param UserInterface $userService [description]
     */
    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userRepository->all();
        return view('users.index', compact('users'));
    }

    public function indexApi()
    {
        // return $this->userService->getByApi();
        // return view('api.user.index', compact('users'));
    }

    /**
     * [getSupplier description]
     * @return [type] [description]
     */
    public function getSupplier()
    {
        $users = $this->userRepository->getSupplier();

        return view('supplier.index', compact('users'));
    }

    /**
     * [getContractOfSuppler description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getContractOfSuppler($id)
    {
        return $this->userRepository->getContractOfSuppler($id);

    }

    /**
     * [getOrderCustomer description]
     * @return [type] [description]
     */
    public function getOrderCustomer()
    {
        $users = $this->userRepository->getOrderCustomer();

        return view('supplier.buyer', compact('users'));
    }

    public function getOrderByCustomer($id)
    {

        return $this->userRepository->getOrderByCustomer($id);
    }
    /**
     * [getContent description]
     * @return [type] [description]
     */
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
    public function store(StoreCreateUserRequest $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $user = $this->userRepository->create($data);

            return response()->json($user, 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeUser(Request $request)
    {
        $user = $this->userRepository->create($request->all());
        return redirect()->route('supplier.create')->with(['user' => $user]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->userRepository->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        if ($request->ajax()) {
            $data = $request->all();
            $user = $this->userRepository->modified($data);
        }
        return response()->json($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
