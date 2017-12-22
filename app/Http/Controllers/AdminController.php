<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Interfaces\AdminInterface;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    /**
     * [$adminRepository description]
     * @var [type]
     */
    protected $adminRepository;

    /**
     * [__construct description]
     * @param AdminInterface $adminRepository [description]
     */
    public function __construct(AdminInterface $adminRepository)
    {

        $this->adminRepository = $adminRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = $this->adminRepository->all();

        return view('admin.index', compact('admins'));
    }

    public function getAllBookByAdmin()
    {
        return view('admin.books.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        if ($request->ajax()) {
            $data = $request->all();

            $admin = $this->adminRepository->create($data);

            return response()->json($admin, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->adminRepository->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAdminRequest $request)
    {
        if ($request->ajax()) {

            $data = $request->all();
            $admin = $this->adminRepository->modifiedByManager($data);

            return response()->json($admin, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
