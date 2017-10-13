<?php

namespace App\Services;

use App\Interfaces\BookInterface;
use App\Interfaces\CateBookInterface;
use App\Interfaces\ImageInterface;
use App\Interfaces\InvoiceDetailInterface;
use App\Interfaces\InvoiceInterface;
use App\Models\Book;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
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
        $books = Book::with('images')->get();

        return $books;
    }

    public function getById($id)
    {
        $book = Book::findOrFail($id);

        return $book;
    }

    public function getSupplier()
    {
        $id = 3;
        $invoiceDetail = InvoiceDetail::where('book_id', $id)->first()->id;

        dd($invoiceDetail);
    }
    public function save($request)
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
        $categories = Input::get('categories');
        $images = Input::hasFile('images');

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
        if ($categories) {

            foreach ($categories as $category) {
                $cateBook = $this->cateBookService->save();

                if (!$cateBook->book()->associate($book) || !$cateBook->category()->associate($category)) {
                    return $result = false;
                } else {

                    $cateBook->save();
                }

            }
        }

        $invoice = $this->invoiceService->save($request);
        $invoiceDetail = $this->invoiceDetailService->save($request);

        /**
         *
         */
        if (!$invoice || !$invoiceDetail) {
            return $result = false;
        } else if (!$invoiceDetail->book()->associate($book) || !$invoiceDetail->invoice()->associate($invoice)) {
            return $result = false;

        } else {
            $invoiceDetail->save();

        }

        return $book;
    }
}
