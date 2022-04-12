<?php

namespace App\Repositories\Repository;

use App\Repositories\Interfaces\BaseRepositoryInterface;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    /**
     * Get's a user by it's ID.
     *
     * @param int
     * @return collection
     */
    public function get(int $id)
    {
        return $this->model->find($id);
    }

    /**
     * Create user.
     *
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * firstOrNew user.
     *
     * @return mixed
     */
    public function firstOrNew(array $data)
    {
        return $this->model->firstOrNew($data);
    }

    /**
     * Get's all users.
     *
     * @return mixed
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Deletes a user.
     *
     * @param int
     */
    public function delete(int $id)
    {
        $this->model->destroy($id);
    }

    /**
     * Updates a user.
     *
     * @param int
     * @param array
     */
    public function update(int $id, array $data)
    {
        $this->model->find($id)->update($data);
    }
}