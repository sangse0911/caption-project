<?php

namespace App\Services;

use App\Interfaces\CategoryInterface;
use App\Models\Category;

class CategoryService implements CategoryInterface
{
    public function getAll()
    {
        $categories = Category::paginate(20);
        return $categories;
    }

    public function getById()
    {

    }

    public function save($request)
    {
        $category = new Category;
        $category->name = $request['name'];
        $category->save();
        return $category;
    }
}
