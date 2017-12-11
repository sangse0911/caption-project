<?php

namespace App\Repositories;

use App\Interfaces\CategoryInterface;
use App\Interfaces\ImageInterface;
use App\Models\Category;
use Auth;
use Illuminate\Support\Facades\Input;

class CategoryRepository implements CategoryInterface
{

    protected $imageRepository;

    /**
     * [__construct description]
     * @param ImageInterface $imageRepository [description]
     */
    public function __construct(ImageInterface $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    /**
     * [all description]
     * @return [type] [description]
     */
    public function all()
    {
        return Category::all();
    }

    /**
     * [findById description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function findById($id)
    {
        return Category::findOrFail($id);

    }
    /**
     * [find description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function find($id)
    {
        $category = Category::find($id);

        $books = $category->books()->wherePivot('category_id', $id)->with('images')->get();

        return $array = [
            'category' => $category,
            'books' => $books,
        ];
    }

    /**
     * [create description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function create($data)
    {

        $category = new Category;

        $category->admin_id = Auth::user()->id;
        $category->name = $data['name'];

        $images = Input::hasFile('images');
        //save image
        if ($images) {

            $path = $this->imageRepository->saveCategory();

            $category->path = $path;
        }

        return $category->save();

    }

    /**
     * [modified description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function modified($data)
    {

        $category = Category::find($data['id']);

        $category->name = $data['name'];

        return $category->save();
    }
}
