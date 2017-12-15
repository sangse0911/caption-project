<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Interfaces\CategoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    protected $categoryRepository;

    public function __construct(CategoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->categoryRepository->all();
        return view('categories.index', compact('categories'));
    }

    public function getIndex()
    {

        return view('admin.categories.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $category = $this->categoryRepository->create($data);
            return response()->json($category, 200);
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
        $array = $this->categoryRepository->find($id);

        $books = $array['books'];
        $category = $array['category'];

        return view('categories.single-category', compact(['books', 'category']));
    }

    /**
     * [listById description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function listById($id)
    {
        return $this->categoryRepository->findById($id);

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
    public function update(StoreCategoryRequest $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $category = $this->categoryRepository->modified($data);

            return response()->json($category, 200);
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
