<?php

namespace App\Repositories;

use App\Interfaces\ImagePostInterface;
use App\Interfaces\PostInterface;
use App\Models\Post;
use Auth;
use Illuminate\Support\Facades\Input;

class PostRepository implements PostInterface
{

    protected $imagePostRepository;

    public function __construct(ImagePostInterface $imagePostRepository)
    {
        $this->imagePostRepository = $imagePostRepository;
    }

    public function all()
    {
        return Post::all();
    }

    public function find($id)
    {

    }

    public function create($request)
    {
        $post = new Post;

        $post->name = $request['name'];
        $post->introduce = $request['introduce'];
        $post->description = $request['description'];
        $post->status = '1';
        $post->author = $request['author'];
        $post->publishing_company = $request['publishing-company'];
        $post->publishing_year = $request['publishing-year'];
        $post->republish = $request['republish'];
        $post->isbn = $request['isbn'];
        $post->user_id = Auth::user()->id;

        $images = Input::hasFile('images');
        // dd($images);
        $post->save();

        //save image
        if ($images) {
            $filesArray = $this->imagePostRepository->save();
            if (!$post->imagePosts()->createMany($filesArray)) {
                return $result = false;
            };
        }

        return $post;
    }
}
