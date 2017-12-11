<?php

namespace App\Repositories;

use App\Interfaces\BookInterface;
use App\Interfaces\ImagePostInterface;
use App\Interfaces\PostInterface;
use App\Interfaces\UserInterface;
use App\Models\Post;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PostRepository implements PostInterface
{
    /**
     * [$imagePostRepository description]
     * @var [type]
     */
    protected $imagePostRepository;
    protected $userRepository;
    protected $bookRepository;

    /**
     * [__construct description]
     * @param ImagePostInterface $imagePostRepository [description]
     */
    public function __construct(
        ImagePostInterface $imagePostRepository,
        BookInterface $bookRepository,
        UserInterface $userRepository
    ) {
        $this->imagePostRepository = $imagePostRepository;
        $this->bookRepository = $bookRepository;
        $this->userRepository = $userRepository;
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

        return DB::table('users')
            ->join('contracts', 'users.id', '=', 'contracts.user_id')
            ->join('contract_details', 'contracts.id', '=', 'contract_details.contract_id')
            ->join('books', 'contract_details.book_id', '=', 'books.id')
            ->where('users.id', $id)
            ->get();
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
