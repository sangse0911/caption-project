<?php

namespace App\Repositories;

use App\Interfaces\CategoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryInterface
{

    public function all()
    {
        return Category::all();
    }

    public function find($id)
    {

    }

    public function create($request)
    {

        return Category::create($request);

    }
}
