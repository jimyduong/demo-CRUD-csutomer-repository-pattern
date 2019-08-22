<?php

namespace App\Http\Controllers;

use App\Services\CustomerServiceInterface;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerServiceInterface $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        $customers = $this->customerService->getAll();
        return view('index', compact("customers"));
    }
    public function show($id){
        $customer = $this->customerService->findOrFail($id);
        return view('index',compact('customer'));
    }
    public function create(){
        return view("create");
    }
    public function store(Request $request){
        $this->customerService->create($request);
//        dd($this->customerService->create($request));
        return redirect()->route('index');
    }
    public function edit($id){
        $customer = $this->customerService->findOrFail($id);
        return view('edit',compact("customer"));
    }
    public function update(Request $request, $id){
        $this->customerService->update($request,$id);
        return redirect()->route('index');
    }
    public function destroy($id){
        $this->customerService->destroy($id);
        return redirect()->route('index');
    }
}
