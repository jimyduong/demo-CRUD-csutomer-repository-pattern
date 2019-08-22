<?php
namespace App\Services\Ipm;
use App\Customer;
use App\Repositories\CustomersRepositoryInterface;
use App\Services\CustomerServiceInterface;

class CustomerServiceIpm extends ServiceImp implements CustomerServiceInterface
{

    public function __construct(CustomersRepositoryInterface $customerRepository)
    {
        $this->repository = $customerRepository;
    }

    public function create($request)
    {
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;

        $this->repository->create($customer);
    }
    public function update($request, $id)
    {
//        $customer = Customer::findOrFail($id);
        $customer = $this->repository->findOrFail($id);
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;

        $this->repository->update($customer);
    }

}
