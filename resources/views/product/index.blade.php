@extends('adminlte::page')

@section('title','Product.info')

@section('content')
    <div class="container">
        <div class="row">
             <div class="col-md-12">
             <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target=".bd-example-modal-lg">+ Product</button>
                
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
                

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                           <form method="POST" action="{{route('product.store')}}"
                            enctype="multipart/form-data">
                            @csrf

                                

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Name</label>
                                    <input type="text" class="form-control" 
                                    name='product_name' placeholder="Product Name">
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Product Type</label>
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
                                            <select id="inputState" name='product_category' class="form-control">
                                                <option>Cosmetics</option>
                                                <option>Watches</option>
                                            </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price</label>
                                    <input type="number" class="form-control" 
                                    name='product_price' placeholder="Product Price">
                                </div>

                    
                                <div class="form-group">
                                  <label for="">Image</label>
                                    <div class="custom-file">
                                        <input type="file" name='product_img'>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">ADD Product</button>
                            </form>
                        </div>   
                    </div>
                </div> 
                
                <table class= "table table-striped" >
                   
                    <thead>
                        <th>Product Name</th>
                        <th>Product Type</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->product_type}}</td>
                                <td>{{$product->product_price}}</td>
                                
                                <td><img src="{{asset('product_img'.'/'.$product->product_img)}}" alt="" height="100" weight="100"></td>
                                
                                <td>
                                    <a href="{{route('product.show',$product->id )}}" class ="btn btn-success btn-md">Show</a>
                                    <a href="{{route('product.edit',$product->id )}}" class ="btn btn-warning btn-md">Edit</a>
                                    <a href="{{route('product.destroy',$product->id )}}"class ="btn btn-danger btn-md">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>   
             </div>
        </div>
    </div>
@endsection