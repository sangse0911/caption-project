<?php

namespace App\Repositories;

use App\Interfaces\ImagePostInterface;
use App\Models\ImagePost;
use Auth;
use File;
use Illuminate\Support\Facades\Input;

class ImagePostRepository implements ImagePostInterface
{
    public function all()
    {
        return ImagePost::all();
    }

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

        $imageName = rand(1, 1000) . time() . '-' . Auth::user()->id . '.' . $image->getClientOriginalExtension();
        $image->move($path, $imageName);

        return $imageName;
    }

}
