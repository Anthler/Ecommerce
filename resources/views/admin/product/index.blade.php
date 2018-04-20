@extends('admin.layout.admin')
@section('content')

@if(Session::has('msg'))
  <p class="alert alert-success">{{session::get('msg')}}</p>
@endif
    <h3>Product</h3>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Size</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>$ {{$product->price}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->size}}</td>

      <td><a href="{{route('product.edit', $product->id)}}">Edit</a></td>
      <td><a href="#">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
