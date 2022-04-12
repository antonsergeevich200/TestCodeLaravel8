<?php

namespace App\Repositories\Interfaces;

interface BaseRepositoryInterface
{
    /**
     * @param arr
     */
    public function create(array $data);
    
    /**
     * @param int
     */
    public function get(int $id);

    /**
     * @return mixed
     */
    public function all();

    /**
     * @param int
     */
    public function delete(int $id);

    /**
     * @param int
     * @param array
     */
    public function update(int $id, array $data);

    /**
     * @param arr
     */
    public function firstOrNew(array $data);
}