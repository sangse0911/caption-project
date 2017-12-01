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
     * [find description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function find($id)
    {
        return Category::find($id);
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
}
