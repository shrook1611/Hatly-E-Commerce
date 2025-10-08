@extends('admin.main');
@section('title','orders');



@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Orders</h4>
                    <!-- <a href="{{route('user.create')}}" type="submit" class="btn btn-primary mr-2">create</a> -->
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>UserName</th>
                                <th>totla</th>

                                <th>status</th>

                                <th>create_at</th>

                                <th>View</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{ $loop->iteration}}</td>

                                <td>{{$order->user->name}}</td>
                                <td>{{$order->total}}</td>

                                <td>{{$order->status}}</td>

                                <td>{{$order->created_at}}</td>

                               <td>
                                    <a href="{{route('order.view',$order->id)}}" class="btn btn-primary">View</a>
                                </td>

                                <td>
                                    <a href="{{route('order.delete',$order->id)}}" class="btn btn-danger">Delete</a>
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