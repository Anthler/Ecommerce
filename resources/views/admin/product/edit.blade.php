@extends('admin.layout.admin')

@section('content')

<h3>Edit Product</h3>

<div class="row">
  <div class="col-lg-6 col-lg-offset-3">
    @if($errors->any())
      <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
</div>

    @endif
    <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
      {{csrf_field()}}
      {{method_field('PUT')}}
      <div class="form-group">
        <label for="name"></label>
        <input type="text" name="name" value="{{ $product->name}}" class="form-control"  placeholder="name">
      </div>

      <div class="form-group">
        <label for="price"></label>
        <input type="text" name="price" value="{{ $product->price}}" class="form-control"  placeholder="price">
      </div>

      <div class="form-group">
        <label for="category">Category</label>
        <select class="form-control" name="category_id">
          <option value="{{$product->category_id}}">
            {{$product->category()}}
          </option>
        </select>
      </div>

      <div class="form-group">
        <label for="size">Example select</label>
        <select class="form-control" name="size">
          <option value="1">small</option>
        </select>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control"  name="description" rows="3">{{$product->description}}</textarea>
      </div>

      <div class="form-group">
        <label for="image">Example file input</label>
        <input type="file" class="form-control-file" name="image">
      </div>

      <input type="submit" name="submit" value="Add Product" class="btn btn-success">
    </form>
  </div>

</div>
@endsection
