<?php

namespace App\Interfaces;

interface AdminInterface
{
    public function all();
    public function find($id);
    public function create($request);
    public function getAdminAuth();
}
