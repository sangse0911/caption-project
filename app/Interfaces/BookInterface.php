<?php

namespace App\Interfaces;

interface BookInterface
{
    public function all();
    public function find($id);
    public function findById($id);
    public function getSellBook();
    public function getRentBook();
    public function create($request);
    public function createWithSupplier($request);
    public function createPostBook($request);
    public function modified($data);
    public function createOwnerBook($data);
    public function getRecentlyBook();
    public function delete($data);
    public function getRentBookInHomepage();
    public function getSellBookInHomepage();
}
