<?php

namespace App\Repositories;

use App\Interfaces\ImagePostInterface;
use App\Interfaces\PostInterface;
use App\Models\Post;
use Auth;
use Illuminate\Support\Facades\Input;

class PostRepository implements PostInterface
{
    /**
     * [$imagePostRepository description]
     * @var [type]
     */
    protected $imagePostRepository;

    /**
     * [__construct description]
     * @param ImagePostInterface $imagePostRepository [description]
     */
    public function __construct(ImagePostInterface $imagePostRepository)
    {
        $this->imagePostRepository = $imagePostRepository;
    }

    /**
     * [all description]
     * @return [type] [description]
     */
    public function all()
    {
        $posts = Post::with('imagePosts')->get();

        return $posts;
    }

    /**
     * [find description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function find($id)
    {
        $post = Post::findOrFail($id);
        $categories = $post->categoryPosts()->where('post_id', $id)->get();
        $images = $post->imagePosts()->where('post_id', $id)->get();
        return [
            'post' => $post,
            'categories' => $categories,
            'images' => $images,
        ];
    }

    /**
     * [create description]
     * @param  [type] $data [description]
     * @return [type]          [description]
     */
    public function create($data)
    {
        // dd($data);
        $post = new Post;

        $post->name = $data['name'];
        $post->introduce = $data['introduce'];
        $post->description = $data['description'];
        $post->status = '1';
        $post->kind = $data['kind'];
        $post->author = $data['author'];
        $post->company = $data['company'];
        $post->year = $data['year'];
        $post->republish = $data['republish'];
        $post->isbn = "";
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
