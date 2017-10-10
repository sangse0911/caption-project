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

    /**
     * [__construct description]
     * @param CateBookInterface      $cateBookService      [description]
     * @param ImageInterface         $imageService         [description]
     * @param InvoiceInterface       $invoiceService       [description]
     * @param InvoiceDetailInterface $invoiceDetailService [description]
     */
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

    /**
     * [getAll book]
     * @return [type] [description]
     */
    public function getAll()
    {
        //get object of all book
        $books = Book::with('images')->get();
        return $books;
    }

    public function getById($id)
    {
        //get object of book by id
        $book = Book::findOrFail($id);

        $path = public_path() . '/assets/images/product/' . $book->images->first()->path;
        if ($opendir = opendir($path)) {
            while (($image = readdir($opendir)) !== false) {
                if ($image != '.' && $image != '..') {
                    $a[] = $image;
                }
            }
        }

        return $array = ['book' => $book, 'image' => $a];
    }

    public function save($request)
    {

        $book = new Book;
        //get book[name] by request[name]
        $book->name = $request['name'];
        //
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
        //get all categories in input
        $categories = Input::get('categories');
        //get all images in input
        $images = Input::hasFile('images');
        //save book
        $book->save();

        /**
         *
         */
        if ($images) {
            $filesArray = $this->imageService->save();
            if (!$book->images()->createMany($filesArray)) {
                return $result = false;
            };
        }

        /**
         * loop all categories and get each object of category
         */
        foreach ($categories as $category) {
            //
            $cateBook = $this->cateBookService->save();
            //get
            $cateBook->category_id = $category;

            $cateBook->book()->associate($book);

            $cateBook->save();
        }

        $invoice = $this->invoiceService->save($request);

        $invoiceDetail = $this->invoiceDetailService->save($request);

        $invoiceDetail->book()->associate($book);

        $invoiceDetail->invoice()->associate($invoice);

        $invoiceDetail->save();

        return $book;
    }
}
