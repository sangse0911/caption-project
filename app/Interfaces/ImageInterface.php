<?php

namespace App\Interfaces;

interface ImageInterface
{
    public function all();
    public function find($id);
    public function save();
    public function uploadImage($image, $path);
    public function saveEvent();
    public function saveCategory();
}
