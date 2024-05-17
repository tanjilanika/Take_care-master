@extends('adminlte::page')
   
@section('title','Product.Edit')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(Session::has('message'))
                    <div class="alert alert-success">
                            {{Session::get('message')}}    
                    </div>

                @endif
                
        <form method="POST" action="{{route('product.update',$product->id)}}"
            enctype="multipart/form-data">
            @method('PATCH')
            @csrf
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" 
                    name='product_name' placeholder="Product Name"
                    value="{{$product->product_name}}">
                 </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Product Type</label>
                        <input value="{{$product->product_type}}">
                        <select class="form-control" name='product_type' id="exampleFormControlSelect1">
                            <option>Body Lotion</option>
                            <option>Body Wash</option>
                            <option>Hair Oil</option>
                            <option>Perfume</option>
                            <option>Shampoo</option>
                            <option>Watch(gents)</option>
                            <option>Watch(ladies)</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputState">Category</label>
                        <input value="{{$product->product_category}}">
                        <select id="inputState" name='product_category' class="form-control">
                            <option>Cosmetics</option>
                            <option>Watches</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="number" class="form-control" 
                    name='product_price' placeholder="Product Price"
                    value="{{$product->product_price}}">
                </div>

                <div class="form-group">
                    <label for="">Image</label>
                    <div class="custom-file">
                        <input type="file" name='product_img' value="">
                        <img src="{{asset('product_img'.'/'.$product->product_img)}}" alt="" height="100" weight="100">
                    </div>
                </div>

                <button type="submit" class="btn btn-success btn-md float-right">Save Edit</button>
                            
            </form>
        </div>
    </div>
</div>
@endsection