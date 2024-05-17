<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index',compact('products'));
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
            
            'product_name'=>'required|string',
            'product_type'=>'required|string',
            'product_category'=>'required|string',
            'product_price'=>'required|string',
            'product_img'=>'required'
        ]);

        

        $product = new Product([
            'product_name'=>$request->get('product_name'),
            'product_type'=>$request->get('product_type'),
            'product_category'=>$request->get('product_category'),
            'product_price'=>$request->get('product_price')

        ]);

        if ($request-> hasFile('product_img')){
            $fileName = time().'.'. $request-> product_img->extension();
            $request-> product_img ->move(public_path('product_img'),$fileName);

        }

        $product-> product_img = $fileName;
        $product -> save();
        return redirect()->back()->with('message','Product Info Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function product_shop()
    {
        $products = Product::all();
        return view('product.product_shop',compact('products'));
       
    }

    public function product_order($id)
    {
        $product = Product::find($id);
        return view('product.product_order',compact('product'));
       
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product.show',compact('product'));
       
    }

    
    // public function shopproduct($id)
    // {
    //     $product = Product::find($id);
    //     return view('shopproduct.show',compact('product'));
       
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit',compact('product'));
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
        $product = Product::find($id);

        $request->validate([
            
            'product_name'=>'required|string',
            'product_type'=>'required|string',
            'product_category'=>'required|string',
            'product_price'=>'required|string'
           
        ]);

        if ($request-> hasFile('product_img')){
            $fileName = time().'.'. $request-> product_img->extension();
            $request-> product_img ->move(public_path('product_img'),$fileName);

        }

        $product->product_name = $request->product_name;
        $product->product_type = $request->product_type;
        $product->product_category = $request->product_category;
        $product->product_price = $request->product_price;
        
        $product-> product_img = $fileName;
        $product -> save();
        return redirect()->route('product.index')->with('message','Data Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product -> delete();
        return redirect()->route('product.index')->with('message','Data Deleted Successfully!');
    }
}
