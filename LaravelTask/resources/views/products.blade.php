@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <a class="btn btn-primary" href="{{url('product/create')}}">Add Product</a>
        </div>
    </div>

     <form>
       <div class="row mt-4">
            <div class="col-sm-4">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="col-sm-4">
                <label for="">Description</label>
                <textarea class="form-control" rows="1" name="description"></textarea>
            </div>

            <div class="col-sm-4 mt-4">
                <button class="mt-2 btn btn-primary">Search</button>
                <a href="{{url('product')}}" class="mt-2 btn btn-danger">reset</a>
            </div>
       </div>
    </form>

    <div class="row mt-4">
        <div class="col-sm-12 mt-4 table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Created Date</th>
                        <th>Edit</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($products as $product)
                     <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{date("d M, Y", strtotime($product->created_at));}}</td>
                        <td>
                            <a href="{{url('product')."/".$product->id."/edit"}}" class="btn btn-success">Edit</a>
                        </td>
                     </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
 </div>
@endsection
