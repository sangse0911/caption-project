<?php

namespace App\Repositories;

use App\Interfaces\BookInterface;
use App\Interfaces\ContractInterface;
use App\Interfaces\ImageInterface;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Input;

class BookRepository implements BookInterface
{

    protected $imageRepository;
    protected $contractRepository;

    public function __construct(
        ImageInterface $imageRepository,
        ContractInterface $contractRepository
    ) {
        $this->imageRepository = $imageRepository;
        $this->contractRepository = $contractRepository;
    }

    public function all()
    {
        return Book::all();
    }

    public function find($id)
    {

    }

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
        $book = new Book;

        $book->name = $request['name'];
        $book->admin_id = $request['admin-id'];
        $book->bookself_id = $request['bookself-id'];
        $book->introduce = $request['introduce'];
        $book->description = $request['description'];
        $book->status = '1';
        $book->author = $request['author'];
        $book->publishing_company = $request['publishing-company'];
        $book->publishing_year = $request['publishing-year'];
        $book->republish = $request['republish'];
        $book->isbn = $request['isbn'];
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

        $contract = $this->contractRepository->create($request);
        //save the book_contract
        $contract->books()->attach($book->id);

        $images = Input::hasFile('images');
        //save image
        if ($images) {
            $filesArray = $this->imageRepository->save();
            if (!$book->images()->createMany($filesArray)) {
                return $result = false;
            };
        }
    }
}
