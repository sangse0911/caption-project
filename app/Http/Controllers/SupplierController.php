<?php

namespace App\Http\Controllers;

use App\Interfaces\SupplierInterface;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    protected $supplierRepository;

    public function __construct(SupplierInterface $supplierRepository)
    {
        $this->middleware('auth:admin', ['except' => 'logout']);
        $this->supplierRepository = $supplierRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = $this->supplierRepository->all();
        return view('supplier.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplier = $this->supplierRepository->create($request->all());

        return redirect()->route('book.create', ['id' => $supplier->id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeIfExist(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $supplier = $this->supplierRepository->createIfExistUser($data);
        }

        return response()->json($supplier, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->supplierRepository->find($id);
    }

    public function showDetail($id)
    {
        return $this->supplierRepository->detail($id);
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
    public function update(Request $request, $id)
    {
        //
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
