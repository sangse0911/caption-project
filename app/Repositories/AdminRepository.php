<?php

namespace App\Repositories;

use App\Interfaces\AdminInterface;
use App\Models\Admin;
use Auth;

class AdminRepository implements AdminInterface
{

    /**
     * [all description]
     * @return [type] [description]
     */
    public function all()
    {
        return Admin::all();
    }

    /**
     * [find description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function find($id)
    {
        return Admin::findOrfail($id);
    }

    /**
     * [create description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function create($data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt('123456'),
            'role_id' => '2',
            'phone' => $data['phone'],
        ]);
    }

    /**
     * [getAdminAuth description]
     * @return [type] [description]
     */
    public function getAdminAuth()
    {
        return Auth::user()->id;
    }

    public function modifiedByManager($data)
    {
        $admin = Admin::findOrfail($data['id']);

        $admin->name = $data['name'];
        $admin->phone = $data['phone'];
        $admin->email = $data['email'];

        return $admin->save();
    }
}
