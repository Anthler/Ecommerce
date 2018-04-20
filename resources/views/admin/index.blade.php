@extends('admin.layout.admin')
@section('content')

@if(Session::has('msg'))
  <p class="alert alert-success">{{session::get('msg')}}</p>
@endif
    <h3>Admin</h3>

  
@endsection
