<?php

namespace App\Repositories;

use App\Interfaces\BookInterface;
use App\Interfaces\ContractInterface;
use App\Interfaces\ImageInterface;
use App\Models\Book;
use App\Models\Category;
use App\Models\Contract;
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

    /**
     * Bind
     *
     * @param ImageInterface    $imageRepository    [description]
     * @param ContractInterface $contractRepository [description]
     */
    public function __construct(
        ImageInterface $imageRepository,
        ContractInterface $contractRepository
    ) {
        $this->imageRepository = $imageRepository;
        $this->contractRepository = $contractRepository;
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
        return Book::where('created_at', 'DESC')->get(4);
    }
    /**
     * [getSellBook description]
     * @return [type] [description]
     */
    public function getSellBook()
    {
        return Book::where('status', '=', '1')->with('images')
            ->whereHas('contracts', function ($query) {
                $query->where('contracts.kind', '=', '0');
            })->get();

    }

    /**
     * [getRenterBook description]
     * @return [type] [description]
     */
    public function getRentBook()
    {
        return Book::where('status', '=', '1')->with('images')
            ->whereHas('contracts', function ($query) {
                $query->where('contracts.kind', '=', '1');
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
        $book = Book::find($id);
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

        $book->name = $data['name'];
        $book->admin_id = Auth::user()->id;
        $book->bookshelf_id = implode($data['location']);
        $book->introduce = $data['introduce'];
        $book->description = $data['description'];
        $book->status = '1';
        $book->author = $data['author'];
        $book->company = $data['company'];
        $book->year = $data['year'];
        $book->republish = $data['republish'];
        $book->isbn = $data['isbn'];
        //save book
        $book->save();
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

        $book->name = $data['name'];
        $book->admin_id = Auth::user()->id;
        $book->bookshelf_id = implode($data['location']);
        $book->introduce = $data['introduce'];
        $book->description = $data['description'];
        $book->status = '1';
        $book->author = $data['author'];
        $book->company = $data['company'];
        $book->year = $data['year'];
        $book->republish = $data['republish'];
        $book->isbn = $data['isbn'];
        //save book
        $book->save();

        $categories = Input::get('categories');
        //get object of category from array id , after that save the
        //book_categories
        foreach ($categories as $categoriesOb) {
            $category = Category::find($categoriesOb);
            $category->books()->attach($book->id);

        }
        //find contract object has id = 1( is the owner of super admin)

        if ($data['price'] == null) {
            $data['price'] = 0;
        }

        $contract = $this->contractRepository->find(1);

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
        // dd($data);

        $book = Book::findOrFail($data['id']);
        $book->categories()->detach();

        if ($data['description'] == null) {
            $data['description'] = "";
        }

        $book->name = $data['name'];
        $book->admin_id = Auth::user()->id;
        $book->bookshelf_id = implode($data['location']);
        $book->introduce = $data['introduce'];
        $book->description = $data['description'];
        $book->status = $data['status'];
        $book->author = $data['author'];
        $book->company = $data['company'];
        $book->year = $data['year'];
        $book->republish = $data['republish'];
        $book->isbn = $data['isbn'];
        $book->price = $data['price'];
        //save book
        $book->save();

        $categories = Input::get('categories');
        foreach ($categories as $categoriesOb) {

            $category = Category::find($categoriesOb);
            $category->books()->attach($book->id);
        }
        return $book;
    }
}
