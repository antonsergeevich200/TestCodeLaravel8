<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

use App\Http\Requests;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\CreateUserRequest;

use App\Repositories\Repository\PostRepository;
use App\Repositories\Repository\UserRepository;

class PostController extends Controller
{

    protected $post;
    protected $user;

    /**
     * PostController constructor.
     *
     * @param PostRepositoryInterface $post
     */
    public function __construct(
        PostRepository $post,
        UserRepository $user
    )
    {
        $this->post = $post;
        $this->user = $user;
    }

    /**
     * List all posts.
     *
     * @return mixed
     */
    public function index() : object
    {
        $data = [
            'posts' => $this->post->all()
        ];

        return response()->json($data, 200);
    }

    /**
     * List all comment for post.
     *
     * @return mixed
     */
    public function show(Post $post) : object
    {   
        $data = [
            'comments' => $post->comments
        ];

        return response()->json($data, 200);
    }

    /**
     * Create post.
     *
     * @return mixed
     */
    public function store(CreatePostRequest $request) : object
    {
        $user_array = $request->only('first_name','last_name','email');
        $post_array = $request->only('title','text');
        
        $author = $this->user->firstOrNew($user_array);
        $author->save();
        $post_array['author_id'] = $author['id'];
        $data = [
            'posts' => $this->post->create($post_array),
            'messages' => 'Post created'
        ];

        return response()->json($data, 200);
    }
}
