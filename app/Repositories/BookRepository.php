<?php

namespace App\Repositories;

use App\Interfaces\BookInterface;
use App\Interfaces\BookshelfInterface;
use App\Interfaces\ContractInterface;
use App\Interfaces\ImageInterface;
use App\Interfaces\UserInterface;
use App\Models\Book;
use App\Models\Category;
use App\Models\Contract;
use App\Models\ContractDetail;
use Auth;
use Illuminate\Support\Facades\Input;

class BookRepository implements BookInterface
{
    /**
     * [$imageRepository description]
     * @var [type]
     */
    protected $imageRepository;
    protected $contractRepository;
    protected $bookshelfRepository;
    protected $userRepository;

    /**
     * Bind
     *
     * @param ImageInterface    $imageRepository    [description]
     * @param ContractInterface $contractRepository [description]
     */
    public function __construct(
        ImageInterface $imageRepository,
        ContractInterface $contractRepository,
        BookshelfInterface $bookshelfRepository,
        UserInterface $userRepository
    ) {
        $this->imageRepository = $imageRepository;
        $this->contractRepository = $contractRepository;
        $this->bookshelfRepository = $bookshelfRepository;
        $this->userRepository = $userRepository;
    }

    /**
     * [all description]
     * @return [type] [description]
     */
    public function all()
    {
        return Book::all();
    }

    public function getRecentlyBook()
    {
        return Book::where('status', '=', '1')
            ->orderBy('created_at', 'desc')
            ->with('images')
            ->take(4)
            ->get();
    }
    /**
     * [getSellBook description]
     * @return [type] [description]
     */
    public function getSellBook()
    {
        return Book::where('status', '=', '1')->with('images')
            ->whereHas('contracts', function ($query) {
                $query->where('contracts.kind', '=', '0')
                    ->where('contracts.status', '=', '0');
            })->take(20)->get();

    }

    /**
     * [getRenterBook description]
     * @return [type] [description]
     */
    public function getRentBook()
    {
        return Book::where('status', '=', '1')->with('images')
            ->whereHas('contracts', function ($query) {
                $query->where('contracts.kind', '=', '1')
                    ->where('contracts.status', '0');
            })->take(20)->get();
    }

    /**
     * [getBestSell description]
     * @return [type] [description]
     */
    public function getBestSell()
    {
        return Book::where('status', '=', '1')->with('images')
            ->whereHas('contracts', function ($query) {
                $query->where('contracts.kind', '=', '1')
                    ->where('contracts.status', '0');
            })->take(20)->get();
    }

    /**
     * [getPostBook description]
     * @return [type] [description]
     */
    public function getPostBook()
    {

        return Book::where('status', '1')->with('images')
            ->whereHas('contracts', function ($query) {
                $query->where('contracts.status', '1');
            })->get();
    }

    /**
     * [getSupplierBook description]
     * @return [type] [description]
     */
    public function getSupplierBook()
    {
        return Book::with('images')
            ->whereHas('contracts', function ($query) {
                $query->where('contracts.status', '2');
            })->get();
    }
    /**
     * [getAllPost description]
     * @return [type] [description]
     */
    public function getAllPost()
    {
        return Book::with('images')
            ->whereHas('contracts', function ($query) {
                $query->where('contracts.status', '1');
            })->get();
    }
    /**
     * [findById description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function findById($id)
    {
        return Book::findOrFail($id);

    }
    /**
     * [find description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function find($id)
    {
        $book = Book::findOrFail($id);
        $categories = $book->bookCategories()->where('book_id', $id)->get();
        $details = $book->contractDetails()->where('book_id', $id)->get();

        $contract = Contract::where('id', $details[0]->contract_id)->first();
        $images = $book->images()->where('book_id', $id)->get();
        return $array = [
            'book' => $book,
            'categories' => $categories,
            'images' => $images,
            'details' => $details,
            'contract' => $contract,
        ];
    }

    /**
     * [create description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function create($data)
    {
        // dd($data);

        $book = new Book;

        if ($data['description'] == null) {
            $data['description'] = "";
        }

        if ($data['price-rent'] == null) {
            $data['price-rent'] = 0;
        }

        $book->name = $data['name'];
        $book->admin_id = Auth::user()->id;
        $book->bookshelf_id = implode($data['location']);
        $book->introduce = $data['introduce'];
        $book->description = $data['description'];
        $book->status = '1';
        $book->rental_fee = $data['price-rent'];
        $book->author = $data['author'];
        $book->company = $data['company'];
        $book->year = $data['year'];
        $book->republish = $data['republish'];
        $book->isbn = $data['isbn'];
        //save book
        $book->save();

        $bookshelf = $this->bookshelfRepository->find(implode($data['location']));

        $bookshelf->status = '0';
        $bookshelf->save();

        //get all categories from input
        $categories = Input::get('categories');
        //get object of category from array id , after that save the
        //book_categories
        foreach ($categories as $categoriesOb) {
            $category = Category::find($categoriesOb);
            $category->books()->attach($book->id);

        }

        $contract = $this->contractRepository->create($data);
        //save the contract_detail

        if ($data['price'] == null) {
            $data['price'] = 0;
        }

        $contract->books()->attach($book->id, [
            'price' => $data['price'],
            'quality' => implode($data['quality']),

        ]);

        $images = Input::hasFile('images');

        if ($images) {
            $filesArray = $this->imageRepository->save();
            if (!$book->images()->createMany($filesArray)) {
                return $result = false;
            };
        }

        return $book;
    }

    public function createWithSupplier($data)
    {

    }

    /**
     * [createOwnerBook description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function createOwnerBook($data)
    {
        $book = new Book;

        if ($data['description'] == null) {
            $data['description'] = "";
        }

        if ($data['price-rent'] == null) {
            $data['price-rent'] = 0;
        }

        $book->name = $data['name'];
        $book->admin_id = Auth::user()->id;
        $book->bookshelf_id = implode($data['location']);
        $book->introduce = $data['introduce'];
        $book->description = $data['description'];
        $book->status = '1';
        $book->rental_fee = $data['price-rent'];
        $book->author = $data['author'];
        $book->company = $data['company'];
        $book->year = $data['year'];
        $book->republish = $data['republish'];
        $book->isbn = $data['isbn'];

        //change status of bookshelf to have book
        $bookshelf = $this->bookshelfRepository->find(implode($data['location']));
        $bookshelf->status = '0';
        $bookshelf->save();

        //save book
        $book->save();

        $categories = Input::get('categories');
        //get object of category from array id , after that save the
        //book_categories
        foreach ($categories as $categoriesOb) {
            $category = Category::find($categoriesOb);
            $category->books()->attach($book->id);

        }

        if ($data['price'] == null) {
            $data['price'] = 0;
        }

        $contract = $this->contractRepository->createIfNoContract($data);

        $contract->books()->attach($book->id, [
            'price' => $data['price'],
            'quality' => implode($data['quality']),

        ]);

        $images = Input::hasFile('images');

        if ($images) {
            $filesArray = $this->imageRepository->save();
            if (!$book->images()->createMany($filesArray)) {
                return $result = false;
            };
        }

        return $book;
    }

    /**
     * [createPostBook description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function createPostBook($data)
    {
        $book = new Book;

        if ($data['description'] == null) {
            $data['description'] = "";
        }

        $book->name = $data['name'];
        $book->admin_id = 1;
        $book->bookshelf_id = 1;
        $book->introduce = $data['introduce'];
        $book->description = $data['description'];
        $book->status = '4';
        $book->price = $data['price'];
        $book->author = $data['author'];
        $book->company = $data['company'];
        $book->year = $data['year'];
        $book->republish = $data['republish'];
        $book->isbn = "";

        //save book
        $book->save();

        $user = $this->userRepository->find(Auth::user()->id);
        $user->phone = $data['phone'];
        $user->save();

        $contract = $this->contractRepository->createByUser($data);

        $contract->books()->attach($book->id, [
            'price' => $data['price'],
            'quality' => implode($data['quality']),

        ]);

        $images = Input::hasFile('images');

        if ($images) {
            $filesArray = $this->imageRepository->save();
            if (!$book->images()->createMany($filesArray)) {
                return $result = false;
            };
        }

        return $book;
    }

    /**
     * [bookForSale description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function bookForSale($data)
    {

        $book = new Book;

        if ($data['description'] == null) {
            $data['description'] = "";
        }

        $book->name = $data['name'];
        $book->admin_id = 1;
        $book->bookshelf_id = 1;
        $book->introduce = $data['introduce'];
        $book->description = $data['description'];
        $book->status = '4';
        $book->price = $data['price'];
        $book->author = $data['author'];
        $book->company = $data['company'];
        $book->year = $data['year'];
        $book->republish = $data['republish'];
        $book->isbn = "";

        //save book
        $book->save();

        $user = $this->userRepository->find(Auth::user()->id);
        $user->phone = $data['phone'];
        $user->save();

        $contract = $this->contractRepository->sale($data);

        $contract->books()->attach($book->id, [
            'price' => $data['price'],
            'quality' => implode($data['quality']),

        ]);

        $images = Input::hasFile('images');

        if ($images) {
            $filesArray = $this->imageRepository->save();
            if (!$book->images()->createMany($filesArray)) {
                return $result = false;
            };
        }

        return $book;
    }
    /**
     * [modified description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function modified($data)
    {

        $book = Book::findOrFail($data['id']);
        $book->categories()->detach();

        $bookshelf = $this->bookshelfRepository->find($data['id']);

        $bookshelf->status = '1';

        $bookshelf->save();

        if ($data['description'] == null) {
            $data['description'] = "";
        }

        $book->name = $data['name'];
        $book->admin_id = Auth::user()->id;
        if ($data['location'] != '1') {

            $book->bookshelf_id = implode($data['location']);
        } else {
            $book->bookshelf_id = '1';
        }

        $book->introduce = $data['introduce'];
        $book->description = $data['description'];
        $book->status = $data['status'];
        $book->author = $data['author'];
        $book->company = $data['company'];
        $book->year = $data['year'];
        $book->republish = $data['republish'];
        $book->isbn = $data['isbn'];
        $book->price = $data['price'];
        $book->rental_fee = $data['rent'];

        //save book
        $book->save();

        $contractDetail = ContractDetail::findOrFail($book->id);
        $contractDetail->quality = implode($data['quality']);
        $contractDetail->save();

        $categories = Input::get('categories');
        foreach ($categories as $categoriesOb) {

            $category = Category::find($categoriesOb);
            $category->books()->attach($book->id);
        }
        return $book;
    }
}
