<?php

namespace App\Services;

use App\Interfaces\PostImageInterface;
use App\Models\PostImage;

class PostImageService implements PostImageInterface
{

    /**
     * [getAll description]
     * @return [type] [description]
     */
    public function getAll()
    {
        $postImages = PostImage::all();
        return $postImages;
    }

    public function getById($id)
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
            $time = time();
            $path = public_path() . '/assets/images/post/';
            $filesArray = [];
            foreach ($files as $file) {
                $filesArray[]['path'] = $this->uploadImage($file, $path);
            }

            return $filesArray;
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
