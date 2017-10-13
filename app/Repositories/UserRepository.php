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

    public function find($id)
    {

    }

    /**
     * create new user
     *
     * @param  array $request
     * @return App\Models\User
     */
    public function create(array $request)
    {
        return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]
        );

    }
}
