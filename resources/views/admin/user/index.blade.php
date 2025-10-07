@extends('admin.main');
@section('title','products');



@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Products</h4>
                    <a href="{{route('user.create')}}" type="submit" class="btn btn-primary mr-2">create</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>email</th>
                                <th>role</th>
                               
                                <th>create_at</th>
                               
                                 <th>Update</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                              
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <td>{{$user->created_at}}</td>
                                
                                  <td>
                                    <a href="{{route('user.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <a href="{{route('user.delete',$user->id)}}" class="btn btn-danger">Delete</a> 
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