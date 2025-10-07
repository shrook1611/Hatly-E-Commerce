@extends('admin.main');
@section('title','products');


@section('content')


<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <h4 class="card-title">Create user</h4>

                <form class="forms-sample" method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">User Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Name" name='name'>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Email</label>
                        <input type="email" class="form-control" id="exampleInputUsername1" placeholder="email" name='email'>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputUsername1" placeholder="password" name='password'>
                    </div>
                    <div class="form-group">


                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="role" name='role'>
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