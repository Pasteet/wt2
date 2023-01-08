<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerFormRequest;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create()
    {
        return view('customer.create');
    }

    public function store(CustomerFormRequest $request)
    {
        $data = $request->validated();
        // $customer = Customer::create(['name'=>$data['name'], 'email'=>$data['email']]);
        $customer = Customer::create($data);
        return redirect('/add-customer')->with('message', 'Customer has been added');

    }

    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
        
    }
}
