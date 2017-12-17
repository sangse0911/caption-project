<?php

namespace App\Repositories;

use App\Interfaces\RateInterface;
use App\Interfaces\ReviewInterface;
use App\Models\Rate;

class RateRepository implements RateInterface
{
    protected $reviewRepository;

    public function __construct(ReviewInterface $reviewRepository)
    {
        $this->reviewRepository = $reviewRepository;
    }

    public function all()
    {
        return Rate::all();
    }
    public function find($id)
    {

    }

    /**
     * [createRateBook description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function create($data)
    {
        $review = $this->reviewRepository->create($data);

        return Rate::create([
            'user_id' => $data['userId'],
            'book_id' => $data['bookId'],
            'rate' => $data['rate'],
        ]);
    }
}
