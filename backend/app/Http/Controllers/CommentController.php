<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;

use App\Http\Requests;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\CreateCommentRequest;

use App\Repositories\Repository\CommentRepository;
use App\Repositories\Repository\UserRepository;

class CommentController extends Controller
{

    protected $comment;
    protected $user;

    /**
     * CommentController constructor.
     *
     * @param CommentRepositoryInterface $post
     */
    public function __construct(
        CommentRepository $comment,
        UserRepository $user
    )
    {
        $this->comment = $comment;
        $this->user = $user;
    }

    /**
     * Create comment.
     *
     * @return mixed
     */
    public function store(CreateCommentRequest $request) : object
    {
        $user_array = $request->only('first_name','last_name','email');
        $comment_array = $request->only('post_id','comment');
        
        $author = $this->user->firstOrNew($user_array);
        $author->save();
        $comment_array['author_id'] = $author['id'];
        $data = [
            'comment' => $this->comment->create($comment_array),
            'messages' => 'Comment created'
        ];

        return response()->json($data, 200);
    }
}