<?php


namespace App\Repositories\Ipm;

use App\Customer;
use App\Repositories\CustomersRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class CustomerRepositoryIpm extends EloquentRepository implements CustomersRepositoryInterface
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
        $model = Customer::class;
        return $model;
    }
}
