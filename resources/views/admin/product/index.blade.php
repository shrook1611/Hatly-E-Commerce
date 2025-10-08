

@extends('admin.main');
@section('title','products');



@section('content')

<div class="row">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Products</h4>
                    <a href="{{route('product.create')}}" type="submit" class="btn btn-primary mr-2">create</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>description</th>
                                <th>price</th>
                                <th>quantity</th>
                                <th>category</th>
                                <th>Image</th>
                                <th>Update</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td><img src="{{asset('storage/'.$product->image)}}" width="50px" alt="image"></td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>
                                    <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <a href="{{route('product.delete',$product->id)}}" class="btn btn-danger">Delete</a>
                                </td>


                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>







    
</div>
 @endsection