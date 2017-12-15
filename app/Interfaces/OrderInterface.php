<?php

namespace App\Interfaces;

interface OrderInterface
{
    public function all();
    public function find($id);
    public function create($data);
    public function getOrder();
    public function getRenter();
    public function getOrderById($id);
    public function getRenterById($id);
    public function modified($data);
}
