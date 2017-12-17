<?php

namespace App\Interfaces;

interface AdminInterface
{
    public function all();
    public function find($id);
    public function create($data);
    public function getAdminAuth();
    public function modifiedByManager($data);
}
