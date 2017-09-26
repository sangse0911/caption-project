<?php

namespace App\Services;

use App\Interfaces\StatusInterface;
use App\Models\Status;

class StatusService implements StatusInterface
{

    /**
     * [getAll description]
     * @return [type] [description]
     */
    public function getAll()
    {
        $status = Status::paginate(20);
        return $status;
    }

    public function getById()
    {

    }

    /**
     * [save description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function save($request)
    {
        $status = new Status;
        $status->name = $request['name'];
        $status->save();
        return $status;
    }
}
