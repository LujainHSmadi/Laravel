<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    //
    public function index(){
        $data = Customer::all();
        return view('customer.index',compact('data'));
    }
    public function create(){
        return view('customer.create');
    }
    public function store(Request $request){
        // request()->validate(['email'=>'required',
        //                         'password'=>'required']);

       Customer::create($request->all());

        return redirect('/customers');

    }
}
