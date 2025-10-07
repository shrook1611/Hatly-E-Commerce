
@extends('admin.main');
@section('title',' UpdatCategories');


@section('content')


<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <h4 class="card-title">Update Category</h4>
              
                <form class="forms-sample" method="post"  action="{{route('category.update',$category->id)}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Category Name</label>
                        <input type="text" class="form-control" value="{{$category->name}}" placeholder="Name" name='name'>
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