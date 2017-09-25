<?php

namespace App\Services;

use App\Interfaces\AdminInterface;
use Auth;

class AdminService implements AdminInterface
{
    public function getAll()
    {

    }
    public function getAuth()
    {
        return Auth::user()->id;
    }
}
