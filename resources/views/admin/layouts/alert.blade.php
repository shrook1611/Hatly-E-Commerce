@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong> 
 
</div>
@endif

<!-- @if(session('errors'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{session('errors')}}</strong> 
 
  </div>
@endif -->
@if($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
 
</div>
@endif