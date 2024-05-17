@extends('adminlte::page')

@section('title','Customer.info')

@section('content')
    <div class="container">
        <div class="row">
             <div class="col-md-12">
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target=".bd-example-modal-lg">+ Customer</button>
               
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

                            <form method="POST" action="{{route('customer.store')}}"
                            enctype="multipart/form-data">
                            @csrf

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" 
                                    name='customer_name' placeholder="Customer Name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Contact Number</label>
                                    <input type="number" class="form-control" 
                                    name='mobile_number' placeholder="Mobile Number">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" class="form-control" 
                                    name='customer_address' placeholder="Customer Address">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Type</label>
                                    <select class="form-control" name='customer_type' id="exampleFormControlSelect1">
                                        <option>Regular</option>
                                        <option>Current</option>
                                        <option>Occasional</option>
                                    </select>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect2">Purchase Items</label>
                                            <select multiple class="form-control" name='purchase_items' id="exampleFormControlSelect2">
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
                                            <select multiple class="form-control" id="inputState" name='product_category' class="form-control">
                                                <option>Cosmetics</option>
                                                <option>Watches</option>
                                            </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Purchase Amounts</label>
                                    <input type="number" class="form-control" 
                                    name='purchase_amounts' placeholder="Purchase Amounts">
                                </div>

                                <button type="submit" class="btn btn-primary">ADD Customer</button>
                            </form>

                        </div>   
                    </div>
                </div>    
                <table class= "table table-striped" >
                    <thead>
                        <th>Customer Name</th>
                        <th>Contact Number</th>
                        <th>Customer Type</th>
                        <th>Purchase Amount</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{$customer->customer_name}}</td>
                                <td>{{$customer->mobile_number}}</td>
                                <td>{{$customer->customer_type}}</td>
                                <td>{{$customer->purchase_amounts}}</td>
                                <td>
                                    <a href="{{route('customer.show',$customer->id )}}" class ="btn btn-success btn-md">Show</a>
                                    <a href="{{route('customer.edit',$customer->id )}}" class ="btn btn-warning btn-md">Edit</a>
                                    <a href="{{route('customer.destroy',$customer->id )}}"class ="btn btn-danger btn-md">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
             </div>
        </div>
    </div>
@endsection