<?php

namespace App\Repositories;

use App\Interfaces\RoleInterface;
use App\Models\Role;

class RoleRepository implements RoleInterface
{
    /**
     * [getAll description]
     * @return [type] [description]
     */
    public function getAll()
    {
        return Role::all();
    }

    /**
     * [find description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function find($id)
    {
        return Role::findOrFail($id);
    }

    /**
     * [create description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function create($data)
    {
        return Role::create([
            'name' => $data['name'],
        ]);
    }

    /**
     * [modified description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function modified($data)
    {
        $role = Role::findOrFail($data['id']);

        $role->name = $data['name'];

        return $role->saveOrFail();
    }
}
