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

    public function getByApi()
    {
        $user = User::all();
        return response()->json($user);
    }
    /**
     * [save description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function save($request)
    {
        $user = new User;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save();
        return $user;
    }

    /**
     * [getById description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getById($id)
    {
        $id = \Auth::user()->id;
        $user = User::findOrFail($id);
        if (!$user) {

        }
        return $user;
    }

    public function getByName()
    {

    }

    /**
     * [getUserLast get lastest create user]
     * @return [object] [description]
     */
    public function getUserLast()
    {
        $user = User::where('id', 'desc')->first();
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
