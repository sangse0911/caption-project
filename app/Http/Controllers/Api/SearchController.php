<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $error = ['Không có kết quả tìm kiếm phù hợp, xin lỗi bạn'];

        if ($request->has('q')) {
            $books = Book::search($request->get('q'))->get();

            return $books->count() ? $books : $error;
        } else {
            $books = Book::all();
            return view('search', compact('$books'));
        }

        return $error;
    }

    public function search(Request $request)
    {
        // First we define the error message we are going to show if no keywords
        // existed or if no results found.
        $error = ['error' => 'No results found, please try with different keywords.'];

        // Making sure the user entered a keyword.
        if ($request->has('q')) {
            // $books = $this->model->search($query)->where('status', 1)->paginate(6);
            // Using the Laravel Scout syntax to search the products table.
            $books = Book::search($request->get('q'))
                ->where('status', '1')
                ->paginate(20)
                ->load('images')
                ->load('contracts.user')
                ->load('categories');

            // If there are results return them, if none, return the error message.
            return $books->count() ? $books : $error;

        }

        // Return the error message if no keywords existed
        return $error;
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
