
@extends('master')

    @section('main-content')
        <div class="card">
            <div class="card-head">
                <a href="{{route('create.product')}}" class="btn" >Create</a>
                <a href="{{route('index.product')}}" class="btn" >Index</a>
            </div>
            <div class="card-body">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($products as $product)
                            <tr>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td><img src="{{asset('uploads/product/images/'.$product->image)}}" alt="" srcset="" height="200" width="200"></td>
                                <td>
                                    <a href="{{route('forcedelete.product',$product->id)}}" class="btn">Delete</a>
                                    <a href="{{route('restore.product',$product->id)}}" class="btn">Restore</a>
                                </td>
                            </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    @endsection
