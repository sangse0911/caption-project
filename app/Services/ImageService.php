<?php

namespace App\Services;

use App\Interfaces\AdminInterface;
use App\Interfaces\ImageInterface;
use App\Models\Image;
use File;
use Illuminate\Support\Facades\Input;

class ImageService implements ImageInterface
{

    protected $adminService;

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
    public function makeDirectory($path, $mode = 0777, $recursive = false, $force = false)
    {
        if ($force) {
            return @mkdir($path, $mode, $recursive);
        } else {
            return mkdir($path, $mode, $recursive);
        }
    }
    public function getAll()
    {
        $images = Image::paginate(20);
        return $images;
    }

    public function getById()
    {

    }

    public function save()
    {
        $id = $this->adminService->getAuth();
        if (Input::hasFile('images')) {
            $images = Input::file('images');
            $time = time();
            $path = public_path('assets/images/product/') . $id . '/' . $time . '/';
            if (!file_exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }

            foreach ($images as $image) {
                $filename = rand(1, 10000) . '.' . $image->getClientOriginalExtension();
                $location = $path . $filename;
                $thumb = \Intervention\Image\Facades\Image::make($image);
                $thumb->save($location);

            }
            $image = new Image;
            $image->book_id = '1';
            $image->path = $time . '/';
            $image->save();
            return $image;
        }
    }
}
