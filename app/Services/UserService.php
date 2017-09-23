<?php

namespace App\Services;

use App\Interfaces\UserInterface;
use App\Models\User;

class UserService implements UserInterface
{

    /**
     * [getAll description]
     * @return [type] [description]
     */
    public function getAll()
    {
        $users = User::paginate(20);
        return $users;
    }

    /**
     * [save description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function save($request)
    {
        $user = User::create($request);
        return $users;
    }

    /**
     * [getById description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getById()
    {
        $id = \Auth::user()->id;
        $user = User::findOrFail($id);
        if (!$user) {

        }
        return $user;
    }

    /**
     * [edit description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function modifired($request)
    {
        $user = User::findOrFail($request['id']);
        $user->name = $request['name'];
        $user->password = bcrypt($request['password']);
        $user->email = $request['email'];
        $user->account_balance = $request['balance'];
        $user->save();
        return $user;

    }

    public function delete($id)
    {
        return User::findOrFail($id)->delete();
    }
}
