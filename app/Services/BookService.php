<?php

namespace App\Services;

use App\Interfaces\BookInterface;
use App\Interfaces\CateBookInterface;
use App\Interfaces\ImageInterface;
use App\Models\Book;
use App\Models\CateBook;
use Illuminate\Support\Facades\Input;

class BookService implements BookInterface
{

    protected $cateBookService;
    protected $imageService;

    public function __construct(
        CateBookInterface $cateBookService,
        ImageInterface $imageService
    ) {
        $this->cateBookService = $cateBookService;
        $this->imageService = $imageService;
    }
    public function getAll()
    {
        $books = Book::paginate(20);
        return $books;
    }

    public function getById()
    {

    }

    public function save($request)
    {
        $book = new Book;
        $book->name = $request['name'];
        $book->admin_id = $request['admin-id'];
        $book->bookself_id = $request['bookself-id'];
        $book->introduce = $request['introduce'];
        $book->description = $request['description'];
        $book->status_id = '1';
        $book->author = $request['author'];
        $book->publishing_company = $request['publishing-company'];
        $book->publishing_year = $request['publishing-year'];
        $book->republish = $request['republish'];
        $book->isbn = $request['isbn'];
        $categories = Input::get('categories');
        $images = Input::hasFile('images');
        $book->save();

        foreach ($categories as $category) {
            $cateBook = new CateBook;
            $cateBook->category_id = $category;
            $cateBook->book()->associate($book);
            $cateBook->save();
        }

        $image = $this->imageService->save();
        $image->book()->associate($book);
        $image->save();
        return $book;
    }
}
