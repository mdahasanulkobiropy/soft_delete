
@extends('master')

    @section('main-content')
        <div class="card">
            <div class="card-head text-center">
                <a href="{{route('index.product')}}" class="btn" >Index</a>
                <a href="{{route('trash.product')}}" class="btn" >Trash</a>
            </div>
            <div class="card-body">
                <form action="{{route('store.product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-11 m-5">
                        <label for="name">Product Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="col-11 m-5">
                        <label for="price">Product Price</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                    <div class="col-11 m-5">
                        <label for="image">Product Image</label>
                        <input type="file" name="image" class="form-control" multiple>
                    </div>
                    <div class="col-11 m-5">
                       <button class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
