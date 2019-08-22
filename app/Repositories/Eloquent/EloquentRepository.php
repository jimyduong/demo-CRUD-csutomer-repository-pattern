<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Eloquent;
use App\Repositories\RepositoryInterface;

abstract class EloquentRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        $result = $this->model->all();
        return $result;
    }

    public function findOrFail($id)
    {
        $result = $this->model->findOrFail($id);
        return $result;
    }

    public function create($obj)
    {
        $this->model = $obj;
        $this->model->save();
    }

    public function update($obj)
    {
        $this->model = $obj;
        $this->model->save();
    }

    public function destroy($obj)
    {
        $this->model = $obj;
        $this->model->delete();
    }

}
