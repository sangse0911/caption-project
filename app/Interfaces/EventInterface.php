<?php

namespace App\Interfaces;

interface EventInterface
{

    public function getAll();
    public function getEventReady();
    public function find($id);
    public function create($request);
    public function modified($request);

}
