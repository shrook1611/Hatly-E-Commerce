@extends('admin.main');
@section('title','categories');



@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Categories</h4>
                    <a href="{{route('category.create')}}" type="submit" class="btn btn-primary mr-2">create</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Created_at</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->status}}</td>
                                <td>{{$category->created_at}}</td>
                                <td>
                                    <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <a href="{{route('category.delete',$category->id)}}" class="btn btn-danger">Delete</a> 
                                </td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection





    </body>

    </html>