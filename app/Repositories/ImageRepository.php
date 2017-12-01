<?php

namespace App\Repositories;

use App\Interfaces\ImageInterface;
use App\Models\Image;
use File;
use Illuminate\Support\Facades\Input;

class ImageRepository implements ImageInterface
{

    /**
     * [all description]
     * @return [type] [description]
     */
    public function all()
    {
        return Image::all();
    }

    /**
     * [find description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function find($id)
    {

    }

    /**
     * [save description]
     * @return [type] [description]
     */
    public function save()
    {

        if (Input::hasFile('images')) {
            $files = Input::file('images');
            $path = public_path() . '/assets/images/product/';
            $filesArray = [];
            foreach ($files as $file) {
                $filesArray[]['path'] = $this->uploadImage($file, $path);
            }

            return $filesArray;
        }
    }

    /**
     * [saveEvent description]
     * @return [type] [description]
     */
    public function saveEvent()
    {
        if (Input::hasFile('images')) {
            $files = Input::file('images');
            $path = public_path() . '/assets/images/event/';
            foreach ($files as $file) {

                $image_path = $this->uploadImage($file, $path);
            }

            return $image_path;
        }
    }

    /**
     * [saveCategory description]
     * @return [type] [description]
     */
    public function saveCategory()
    {
        if (Input::hasFile('images')) {
            $files = Input::file('images');
            $path = public_path() . '/assets/images/category/';
            foreach ($files as $file) {

                $image_path = $this->uploadImage($file, $path);
            }

            return $image_path;
        }
    }

    /**
     * [uploadImage description]
     * @param  [type] $image [description]
     * @param  [type] $path  [description]
     * @return [type]        [description]
     */
    public function uploadImage($image, $path)
    {
        if (empty($path) || empty($image)) {
            return false;
        }

        $imageName = rand(1, 1000) . time() . '.' . $image->getClientOriginalExtension();
        $image->move($path, $imageName);

        return $imageName;
    }
}
