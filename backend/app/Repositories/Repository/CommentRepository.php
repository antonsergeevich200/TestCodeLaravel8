<?php

namespace App\Repositories\Repository;

use App\Models\Comment;

class CommentRepository extends BaseRepository
{   
    /**
     *
     */
    public function __construct(Comment $comment)
    {
        $this->model = $comment;
    }
}