<?php

namespace App\Repositories;

use App\Interfaces\AdminInterface;
use App\Interfaces\BookselfInterface;
use App\Models\Bookself;
use Illuminate\Http\Request;

class BookSelfRepository implements BookselfInterface
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
    public function create($request)
    {
        $adminId = $this->adminRepository->getAdminAuth();

        $bookSelf = new Bookself;

        if (!$bookSelf->admin()->associate($adminId)) {
            return response()->json('Loi khong xac dinh, vui long thu lai');
        }

        $bookSelf->location = $request['location'];
        $bookSelf->status = '1';

        $bookSelf->save();

        return $bookSelf;
    }
}
