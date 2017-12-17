<?php

namespace App\Repositories;

use App\Interfaces\AdminInterface;
use App\Interfaces\BookshelfInterface;
use App\Models\Bookshelf;
use Auth;
use Illuminate\Http\Request;

class BookshelfRepository implements BookshelfInterface
{
    //
    protected $adminRepository;

    /**
     * [__construct description]
     * @param AdminInterface $adminRepository [description]
     */
    public function __construct(AdminInterface $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    /**
     * [all description]
     * @return [type] [description]
     */
    public function all()
    {
        return Bookshelf::all();
    }

    /**
     * [find description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function find($id)
    {
        return Bookshelf::findOrFail($id);
    }

    /**
     * [first description]
     * @return [type] [description]
     */
    public function first()
    {
        return Bookshelf::where('status', '1')->first();
    }

    /**
     * [getListReadyBookshelf description]
     * @return [type] [description]
     */
    public function getListReadyBookshelf() {
        return Bookshelf::where('status', '=', '1')
            ->orderBy('id')
            ->get();
    }
    /**
     * [create description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function create($data)
    {
        $adminId = Auth::user()->id;

        $bookshelf = new Bookshelf;

        if (!$bookshelf->admin()->associate($adminId)) {
            return response()->json('Lỗi không xác định, vui lòng  thử  lại');
        }

        $bookshelf->location = $data['location'];
        $bookshelf->status = '1';

        return $bookshelf->save();

    }

    public function modified($data)
    {
        $bookshelf = Bookshelf::findOrFail($data['id']);

        $bookshelf->admin_id = Auth::user()->id;
        $bookshelf->location = $data['location'];
        $bookshelf->status = $data['status'];

        return $bookshelf->save();
    }
}
