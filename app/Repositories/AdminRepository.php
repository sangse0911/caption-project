<?php

namespace App\Repositories;

use App\Interfaces\AdminInterface;
use App\Models\Admin;
use Auth;

class AdminRepository implements AdminInterface
{

    public function all()
    {
        return Admin::all();
    }

    public function find($id)
    {

    }

    public function create($request)
    {

    }

    public function getAdminAuth()
    {
        return Auth::user()->id;
    }
}
