@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('product/store')}}" method="POST">
        @csrf
        <div class="row mt-4">
            <div class="col-sm-4">
                <label for="">Name</label>
                <input type="text" name="name" required="" class="form-control">
            </div>

            <div class="col-sm-4">
                <label for="">Description</label>
                <textarea class="form-control" rows="2" name="description" required=""></textarea>
            </div>

            <div class="col-sm-4">
                <label for="">Price</label>
                <input type="text" name="price" required="" class="form-control">
            </div>

            <div class="col-sm-12 mt-3">
                <button class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
 </div>
@endsection
