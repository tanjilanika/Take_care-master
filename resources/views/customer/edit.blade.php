@extends('adminlte::page')
   
@section('title','Custome.Edit')

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
                
            <form method="POST" action="{{route('customer.update',$customer->id)}}"
            enctype="multipart/form-data">
            @method('PATCH')
             @csrf

                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" 
                    name='customer_name' placeholder="Customer Name"
                    value="{{$customer->customer_name}}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Contact Number</label>
                    <input type="number" class="form-control" 
                    name='mobile_number' placeholder="Mobile Number"
                    value="{{$customer->mobile_number}}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" 
                    name='customer_address' placeholder="Customer Address"
                    value="{{$customer->customer_address}}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Type</label>
                    <select class="form-control" name='customer_type' id="exampleFormControlSelect1"
                    value="{{$customer->customer_type}}">
                        <option>Regular</option>
                        <option>Current</option>
                        <option>Occasional</option>
                    </select>
                 </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect2">Purchase Items</label>
                        <input value="{{$customer->purchase_items}}">
                            <select multiple class="form-control" name='purchase_items' 
                            id="exampleFormControlSelect2">
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
                        <input value="{{$customer->product_category}}">
                        <select multiple class="form-control" id="inputState" 
                        name='product_category' class="form-control">
                            <option>Cosmetics</option>
                            <option>Watches</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Purchase Amounts</label>
                    <input type="number" class="form-control" 
                    name='purchase_amounts' placeholder="Purchase Amounts"
                    value="{{$customer->purchase_amounts}}">
                </div>

                <button type="submit" class="btn btn-success btn-md float-right">Save Edit</button>

            </form>

        </div>
    </div>
</div>
@endsection