<?php

namespace App\Repositories\Core;

use App\Repositories\Contracts\RepositoryInterface;

class BaseEloquentRepository implements RepositoryInterface
{
    public function getAll()
    {
        
    }
    public function findById($id)
    {

    }
    public function findWhere($column, $valor)
    {

    }
    public function paginate($totalPage = 10) 
    {

    }
    public function store(array $data)
    {

    }
    public function update($id, array $data)
    {

    }
    public function delete($id){

    }
}
