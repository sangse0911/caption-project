<?php

namespace App\Repositories;

use App\Interfaces\UserInterface;
use App\Models\User;

class UserRepository implements UserInterface
{

    /**
     * get all user in User
     *
     * @return object
     */
    public function all()
    {
        return User::all();
    }

    /**
     * [find description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function find($id)
    {
        return User::findOrFail($id);
    }

    /**
     * create new user
     *
     * @param  array $request
     * @return App\Models\User
     */
    public function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => bcrypt('123456'),
        ]
        );
    }

    /**
     * [modified description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function modified($data)
    {

        $user = User::findOrFail($data['id']);

        $user->status = $data['status'];
        $user->phone = $data['phone'];

        return $user->save();
    }

    /**
     * [getSupplier description]
     * @return [type] [description]
     */
    public function getSupplier()
    {
        return User::has('contracts')->get();
    }

    /**
     * [getContractOfSuppler description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getContractOfSuppler($id)
    {
        return User::find($id)->contracts()->get();
    }

    /**
     * [getOrderCustomer description]
     * @return [type] [description]
     */
    public function getOrderCustomer()
    {
        return User::has('orders')->get();
    }

    /**
     * [getOrderByCustomer description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getOrderByCustomer($id)
    {
        return User::find($id)->orders()->get();
    }

}
