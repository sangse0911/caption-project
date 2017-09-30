<?php

namespace App\Services;

use App\Interfaces\BookInterface;
use App\Interfaces\CateBookInterface;
use App\Interfaces\ImageInterface;
use App\Interfaces\InvoiceDetailInterface;
use App\Interfaces\InvoiceInterface;
use App\Models\Book;
use Illuminate\Support\Facades\Input;

class BookService implements BookInterface
{

    protected $cateBookService;
    protected $imageService;
    protected $invoiceService;
    protected $invoiceDetailService;

    public function __construct(
        CateBookInterface $cateBookService,
        ImageInterface $imageService,
        InvoiceInterface $invoiceService,
        InvoiceDetailInterface $invoiceDetailService
    ) {
        $this->cateBookService = $cateBookService;
        $this->imageService = $imageService;
        $this->invoiceService = $invoiceService;
        $this->invoiceDetailService = $invoiceDetailService;
    }
    public function getAll()
    {
        $books = Book::all();
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
            $cateBook = $this->cateBookService->save();
            $cateBook->category_id = $category;
            $cateBook->book()->associate($book);
            $cateBook->save();
            // $cateBook = $this->cateBookService->save();
        }

        $image = $this->imageService->save();
        $image->book()->associate($book);
        $image->save();

        $invoice = $this->invoiceService->save($request);

        $invoiceDetail = $this->invoiceDetailService->save($request);
        $invoiceDetail->book()->associate($book);
        $invoiceDetail->invoice()->associate($invoice);

        $invoiceDetail->save();
        return $book;
    }
}
