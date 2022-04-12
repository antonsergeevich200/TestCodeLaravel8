<?php

namespace App\Repositories\Repository;

use App\Models\Post;

class PostRepository extends BaseRepository
{   
    /**
     *
     */
    public function __construct(Post $post)
    {
        $this->model = $post;
    }
}