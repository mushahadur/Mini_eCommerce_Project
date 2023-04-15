<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.customer.index', ['customers' => Customer::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Customer::newCustomer($request);
        return redirect('/customer')->with('message', 'Customer info save successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editableCustomer = Customer::find($id);
        return view('admin.customer.edit',compact('editableCustomer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Customer::updateCustomer($request, $id);
        return redirect('/customer')->with('message', 'Customer info update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $customer = Customer::find($id);
        $customer->delete();

        // // Customer::deleteCustomer($id);
         return redirect('/customer')->with('message', 'Customer info trash successfully.');
    }


    public function trash(){
        return view('admin.customer.trash-customer', [
            'customers' => Customer::onlyTrashed()->get()
        ]);
    }

    public function undo($id){
        $product = Customer::withTrashed()->find($id);
        $product->restore();
        return redirect('/customer-trash')->with('message', 'Customer restore successfully! and go to manage Page');
    }
    public function forceDelete($id){
        $product = Customer::withTrashed()->find($id);
        $product->forceDelete();
        return redirect('/customer-trash')->with('message', 'Customer Delete successfully! ');
    }

}
