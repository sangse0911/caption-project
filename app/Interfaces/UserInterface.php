<?php

namespace App\Interfaces;

interface UserInterface
{
    public function getAll();
    public function getById();
    public function save($request);
    public function modifired($request);
    public function delete($id);
}
