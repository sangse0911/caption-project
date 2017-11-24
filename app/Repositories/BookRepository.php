<?php

namespace App\Repositories;

use App\Interfaces\BookInterface;
use App\Interfaces\ContractInterface;
use App\Interfaces\ImageInterface;
use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
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
        return Book::simplePaginate(10);
    }

    /**
     * [getSellBook description]
     * @return [type] [description]
     */
    public function getSellBook()
    {
        return Book::where('status', '=', '1')->with('images')
            ->whereHas('contracts', function ($query) {
                $query->where('contracts.status', '=', '1');
            })->get();

    }

    /**
     * [getRenterBook description]
     * @return [type] [description]
     */
    public function getRenterBook()
    {
        return Book::where('status', '=', '1')->with('images')
            ->whereHas('contracts', function ($query) {
                $query->where('contracts.status', '=', '0');
            })->get();
    }

    public function find($id)
    {
        $book = Book::find($id);
        $cate_book = BookCategory::find($book->id);

        return $array = ['book' => $book,
            'categories' => $cate_book];
    }

    /**
     * [create description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function create($data)
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
        if ($data['price-sell'] == null) {
            $data['price-sell'] = 0;
        }
        if ($data['price-rent'] == null) {
            $data['price-rent'] = 0;
        }
        $contract->books()->attach($book->id, [
            'entered_price' => $data['price-sell'],
            'rental_price' => $data['price-rent'],
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

    public function modified($data)
    {
        $book = Book::findOrFail($data['id']);

        $book->admin_id = Auth::user()->id;

    }
}
