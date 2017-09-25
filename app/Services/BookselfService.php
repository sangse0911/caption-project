<?php

namespace App\Services;

use App\Interfaces\AdminInterface;
use App\Interfaces\BookselfInterface;
use App\Models\Bookself;
use Illuminate\Http\Request;

class BookselfService implements BookselfInterface
{

    protected $adminService;

    public function __construct(
        AdminInterface $adminService
    ) {
        $this->adminService = $adminService;
    }

    /**
     * [getAll description]
     * @return [type] [description]
     */
    public function getAll()
    {
        $bookselfs = Bookself::paginate(20);
        return $bookselfs;
    }

    /**
     * [getById description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getById($id)
    {

    }

    /**
     * [getFirst description]
     * @return [type] [description]
     */
    public function getFirst()
    {
        $bookself = Bookself::where('status', '1')->first();
        return $bookself;
    }

    public function getByStatus($slug)
    {
        if ($slug == '3') {
            $bookselfs = Bookself::paginate(20);
        } else {
            $bookselfs = Bookself::where('status', $slug)->get();
        }
        return $bookselfs;
    }

    /**
     * [save description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function save($request)
    {

        $bookself = new Bookself;
        $bookself->admin_id = $this->adminService->getAuth();
        $bookself->status = '1';
        $bookself->location = $request['location'];
        $bookself->save();
        return $bookself;
    }
}
