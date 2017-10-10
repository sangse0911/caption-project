<?php

namespace App\Services;

use App\Interfaces\AdminInterface;
use App\Interfaces\ImageInterface;
use App\Models\Image;
use File;
use Illuminate\Support\Facades\Input;

class ImageService implements ImageInterface
{
    //
    protected $adminService;

    /**
     * [__construct description]
     * @param AdminInterface $adminService [description]
     */
    public function __construct(AdminInterface $adminService)
    {
        $this->adminService = $adminService;
    }
    /**
     * [make folder]
     * @param  [location]  $path      [description]
     * @param  integer $mode      [description]
     * @param  boolean $recursive [description]
     * @param  boolean $force     [description]
     * @return [type]             [description]
     */
    // public function makeDirectory($path, $mode = 0777, $recursive = false, $force = false)
    // {
    //     if ($force) {
    //         return @mkdir($path, $mode, $recursive);
    //     } else {
    //         return mkdir($path, $mode, $recursive);
    //     }
    // }

    /**
     * [getAll description]
     * @return [type] [description]
     */
    public function getAll()
    {
        $images = Image::paginate(20);
        return $images;
    }

    public function getById()
    {

    }

    /**
     * [save description]
     * @return [type] [description]
     */
    public function save()
    {

        if (Input::hasFile('images')) {
            //get value of input
            $files = Input::file('images');
            //get time now
            $time = time();
            //set path
            $path = public_path() . '/assets/images/product/';
            //
            $filesArray = [];
            //loop all file get by input
            foreach ($files as $file) {
                //
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
        //get imageName
        $imageName = rand(1, 1000) . time() . '.' . $image->getClientOriginalExtension();
        //save image into folder by path
        $image->move($path, $imageName);

        return $imageName;
    }
}
