<?php

namespace App\Interfaces;

interface BookselfInterface
{
    public function getAll();
    public function getFirst();
    public function getById($id);
    public function save($request);
    public function getByStatus($status);
}
