<?php

namespace App\Interfaces;

interface UserInterface
{
    public function getAll();
    public function getById($id);
    public function getUserLast();
    public function save($request);
    public function modifired($request);
    public function delete($id);
}
