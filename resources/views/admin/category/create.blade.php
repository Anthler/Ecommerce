@extends('admin.layout.admin')

@section('content')
<div class="row">
  <div class="col-md-6 col-lg-offset-3">
    <form method="post" action="{{route('categories.store')}}">
      {{csrf_field()}}
      <div class="form-group">
        <label for="name">Category Name</label>
        <input type="text" name="name"  class="form-control" placeholder="Category name">
      </div>
      <input type="submit" name="submit" value="Add Product" class="btn btn-success">
    </form>
  </div>
</div>
@endsection
