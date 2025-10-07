@extends('admin.main');
@section('title','Update Products');


@section('content')


<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <h4 class="card-title">Update user</h4>

                <form class="forms-sample" method="post" action="{{route('user.update',$user->id)}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">user Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" value="{{$user->name}}" placeholder="Name" name='name'>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Email</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" value="{{$user->email}}" name='email'>
                    </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputUsername1" value="{{$user->password}}"  name='password'>
                    </div>
                    <div class="form-group">

                        <label for="exampleInputUsername1">Role</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" value="{{$user->role}}" name='role'>
                    </div>


                    <button type="submit" class="btn btn-primary mr-2">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection





</body>

</html>