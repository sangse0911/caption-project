<?php

namespace App\Repositories;

use App\Interfaces\AdminInterface;
use App\Interfaces\BookshelfInterface;
use App\Models\Bookself;
use Auth;
use Illuminate\Http\Request;

class BookShelfRepository implements BookshelfInterface
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
        return Bookself::all();
    }

    /**
     * [find description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function find($id)
    {
        return Bookself::findOrFail($id);
    }

    /**
     * [first description]
     * @return [type] [description]
     */
    public function first()
    {
        return Bookself::where('status', '1')->first();
    }

    /**
     * [create description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function create($data)
    {
        $adminId = $this->adminRepository->getAdminAuth();

        $bookShelf = new Bookself;

        if (!$bookShelf->admin()->associate($adminId)) {
            return response()->json('Loi khong xac dinh, vui long thu lai');
        }

        $bookShelf->location = $data['location'];
        $bookShelf->status = '1';

        return $bookShelf->save();

    }

    public function modified($data)
    {
        $bookShelf = Bookself::findOrFail($data['id']);

        $bookShelf->admin_id = Auth::user()->id;
        $bookShelf->location = $data['location'];
        $bookShelf->status = $data['status'];

        return $bookShelf->save();
    }
}
