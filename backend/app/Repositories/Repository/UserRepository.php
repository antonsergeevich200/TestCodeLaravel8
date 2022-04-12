<?php

namespace App\Repositories\Repository;

use App\Models\User;

class UserRepository extends BaseRepository
{   
    /**
     *
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }
}