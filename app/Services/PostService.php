<?php

namespace App\Services;

use App\Interfaces\PostInterface;
use App\Interfaces\PostInvoiceInterface;
use App\Models\Post;

class PostService implements PostInterface
{
    protected $postInvoiceService;

    public function __construct(
        PostInvoiceInterface $postInvoiceService
    ) {
        $this->postInvoiceService = $postInvoiceService;
    }
    public function getAll()
    {
        $posts = Post::all();
        return $posts;
    }

    public function getById($id)
    {

    }

    public function save($request)
    {

    }
}
