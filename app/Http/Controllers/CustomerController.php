<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customer.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_name'=>'required|string',
            'mobile_number'=>'required|string',
            'customer_address'=>'required|string',
            'customer_type'=>'required|string',
            'purchase_items'=>'required|string',
            'product_category'=>'required|string',
            'purchase_amounts'=>'required|string'  
        ]);

        $customer = new Customer([

            'customer_name'=>$request->get('customer_name'),
            'mobile_number'=>$request->get('mobile_number'),
            'customer_address'=>$request->get('customer_address'),
            'customer_type'=>$request->get('customer_type'),
            'purchase_items'=>$request->get('purchase_items'),
            'product_category'=>$request->get('product_category'),
            'purchase_amounts'=>$request->get('purchase_amounts')

        ]);
        
        $customer -> save();
        return redirect()->back()->with('message','Customer Info Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customer.edit',compact('customer'));
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
        $customer = Customer::find($id);

        $request->validate([
            'customer_name'=>'required|string',
            'mobile_number'=>'required|string',
            'customer_address'=>'required|string',
            'customer_type'=>'required|string',
            'purchase_items'=>'required|string',
            'product_category'=>'required|string',
            'purchase_amounts'=>'required|string' 
        ]);

        $customer->customer_name = $request->customer_name;
        $customer->mobile_number = $request->mobile_number;
        $customer->customer_address = $request->customer_address;
        $customer->customer_type = $request->customer_type;
        $customer->purchase_items = $request->purchase_items;
        $customer->product_category = $request->product_category;
        $customer->purchase_amounts = $request->purchase_amounts;

            $customer -> save();
            return redirect()->route('customer.index')->with('message','Data Updated Successfully!');   



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
        $customer -> delete();
        return redirect()->route('customer.index')->with('message','Data Deleted Successfully!');
    }
}
