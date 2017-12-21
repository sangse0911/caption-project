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
use App\Models\User;
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
        return Book::where('status', '<>', '9')->get();
    }

    /**
     * get 4 books recently add orderBy created_at desc
     * @return [type] [description]
     */
    public function getRecentlyBook()
    {
        return Book::where('status', '=', '1')
            ->orderBy('created_at', 'desc')
            ->with('images')
            ->take(4)
            ->get();
    }

    /**
     * get 20 books order by created_at and display in the homepage
     * @return [type] [description]
     */
    public function getSellBookInHomepage()
    {
        return Book::where('status', '=', '1')->with('images')
            ->whereHas('contracts', function ($query) {
                $query->where('contracts.kind', '=', '0')
                    ->where('contracts.status', '=', '0');
            })->take(20)->get();
    }

    /**
     * get all sell-book and display in the admin page
     * @return [type] [description]
     */
    public function getSellBook()
    {
        return Book::where('status', '=', '1')->with('images')
            ->whereHas('contracts', function ($query) {
                $query->where('contracts.kind', '=', '0')
                    ->where('contracts.status', '=', '0');
            })->get();

    }

    /**
     * get all sell-book and display in the sell-book page
     * @return [type] [description]
     */
    public function getAllSellBook()
    {
        return Book::where('status', '=', '1')->with('images')
            ->whereHas('contracts', function ($query) {
                $query->where('contracts.kind', '=', '0')
                    ->where('contracts.status', '=', '0');
            })->orderBy('created_at', 'desc')->paginate(15);
    }

    /**
     * get all rent-book and display in the admin page
     * @return [type] [description]
     */
    public function getRentBook()
    {
        return Book::where('status', '=', '1')->with('images')
            ->whereHas('contracts', function ($query) {
                $query->where('contracts.kind', '=', '1')
                    ->where('contracts.status', '0');
            })->get();
    }

    /**
     * get 20 books of rent-book and display in home page
     * @return [type] [description]
     */
    public function getRentBookInHomepage()
    {
        return Book::where('status', '=', '1')->with('images')
            ->whereHas('contracts', function ($query) {
                $query->where('contracts.kind', '=', '1')
                    ->where('contracts.status', '0');
            })->take(20)->get();
    }

    /**
     * get all rent-book and display in the rent-book page
     * @return [type] [description]
     */
    public function getAllRentBook()
    {
        return Book::where('status', '=', '1')->with('images')
            ->whereHas('contracts', function ($query) {
                $query->where('contracts.kind', '=', '1')
                    ->where('contracts.status', '0');
            })->orderBy('created_at', 'desc')->paginate(15);
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
     * get all book of post book and display in the post-book page
     * @return [type] [description]
     */
    public function getPostBook()
    {

        // $books = DB::table('books')
        //     ->join('images', 'books.id', '=', 'images.book_id')
        //     ->join('contract_details', 'books.id', '=', 'contract_details.book_id')
        //     ->join('contracts', 'contracts.id', '=', 'contract_details.contract_id')
        //     ->join('users', 'users.id', '=', 'contracts.user_id')
        //     ->where('books.status', '=', '1')
        //     ->where('contracts.status', '=', '1')
        //     ->select('images.path','    ')
        //     ->get();
        // return $books;
        return Book::where('status', '1')
            ->with('images')
            ->with('contracts.user')
            ->whereHas('contracts', function ($query) {
                $query->where('contracts.status', '1');
            })
            ->paginate(9);
    }

    /**
     * get all book which have sold for system
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
     * get all book of post book and display in the admin page
     * @return [type] [description]
     */
    public function getAllPost()
    {
        return Book::with('images')
            ->where('status', '<>', '9')
            ->whereHas('contracts', function ($query) {
                $query->where('contracts.status', '1');
            })->orderBy('created_at', 'desc')->get();
    }

    /**
     * find book by id
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function findById($id)
    {
        return Book::findOrFail($id);

    }
    /**
     * find book by id
     * get categories, details, rates, contract, images of book to display in the single-book page
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function find($id)
    {
        $book = Book::findOrFail($id);
        $categories = $book->bookCategories()->where('book_id', $id)->get();
        $details = $book->contractDetails()->where('book_id', $id)->get();
        $rates = $book->rates()->where('book_id', $id)->get();
        $contract = Contract::where('id', $details[0]->contract_id)->first();
        $user = User::where('id', $contract->user_id)->first();
        $images = $book->images()->where('book_id', $id)->get();

        return $array = [
            'book' => $book,
            'categories' => $categories,
            'images' => $images,
            'details' => $details,
            'contract' => $contract,
            'rates' => $rates,
            'user' => $user,
        ];

    }

    /**
     * create new book from admin page
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
     * create new book which owned by boss in the admin page
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
        $book->price = $data['price'];
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
     * create new book to save in the post-book view
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
        $book->rental_fee = $data['price-rent'];
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
     * create new book which supplie for store
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
        $book->rental_fee = $data['price-rent'];
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
     * edit book
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

    /**
     * delete book from view but still save in the system
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function delete($data)
    {
        $book = Book::findOrFail($data['id']);
        $book->status = 9;

        return $book->save();
    }
}
