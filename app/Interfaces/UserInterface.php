<?php

namespace App\Interfaces;

interface UserInterface
{
    public function all();
    public function find($id);
    public function create(array $request);
    public function modified($data);
    public function getContractOfSuppler($id);
    public function getSupplier();
    public function getOrderCustomer();
    public function getOrderByCustomer($id);
}
