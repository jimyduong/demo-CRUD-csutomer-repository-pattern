<?php
namespace App\Services\Ipm;
use App\Service\ServiceInterface;

class ServiceImp implements ServiceInterface{
    protected $repository;
    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function findOrFail($id)
    {
       return $this->repository->findOrFail($id);
    }

    public function create($request)
    {
        // TODO: Implement create() method.
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        $object = $this->findOrFail($id);
        return $this->repository->destroy($object);
    }
}
