@extends('adminlte::page')
   
@section('title','Product.Details')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <form method="POST" action="#"
            enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                    <label for="">Image</label>
                    <td><img src="{{asset('product_img'.'/'.$product->product_img)}}" alt="" height="200" weight="200"></td>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" 
                    name='product_name' placeholder="Product Name"
                    value="{{$product->product_name}}">
                 </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Product Type</label>
                        <input type="text" class="form-control"name='product_type' value="{{$product->product_type}}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputState">Category</label>
                        <input type="text" class="form-control" 
                        name='product_category' value="{{$product->product_category}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="number" class="form-control" 
                    name='product_price' placeholder="Product Price"
                    value="{{$product->product_price}}">
                </div>
                            
            </form>

        </div>
    </div>
</div>
@endsection