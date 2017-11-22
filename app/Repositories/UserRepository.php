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
        return User::find($id);
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
            'name' => $data['name'],
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

        $user->account_status = $data['status'];

        return $user->save();
    }
}
