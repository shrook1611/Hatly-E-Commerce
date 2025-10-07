@extends('admin.main');
@section('title','Update Products');


@section('content')


<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <h4 class="card-title">Update Product</h4>

                <form class="forms-sample" method="post" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">product Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" value="{{$product->name}}" placeholder="Name" name='name'>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Description</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" value="{{$product->description}}"     placeholder="description" name='description'>
                    </div>
                    <div class="form-group">


                        <input type="text" class="form-control" id="exampleInputUsername1"   value="{{$product->price}}"     placeholder="price" name='price'>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Quantity</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" value="{{$product->quantity}}"      placeholder="quantity" name='quantity'>
                    </div>
                        <div class="form-group">
                        <label for="exampleInputUsername1">Image</label>
                        <input type="file" class="form-control" id="exampleInputUsername1" value="{{$product->image}}" name='image'>
                    </div>
                    <div class="form-group
                    <label for=" exampleInputUsername1">Category</label>
                        <select class="form-control form-control-lg" name="category_id">
                            <option value="">--select category--</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
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