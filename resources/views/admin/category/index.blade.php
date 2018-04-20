@extends('admin.layout.admin')

@section('content')

  <h3>Categories</h3>
  @if(Session::has('msg'))

    <p class="alert alert-success">{{Session::get('msg')}}</p>

  @endif
  <div class="row">
    <div class="col-md-4 col-lg-offset-4">

        <br><br><br>
      <ul class="list-group">

        @if(!empty($categories))
        @foreach($categories as $category)
        <a href="{{route('categories.show', $category->id)}}"><li class="list-group-item">{{$category->name}}</li></a>
        @endforeach
        @endif
      </ul>
      <a class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Add Category </a>
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Launch demo modal
        </button> -->

<!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add new category</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{route('categories.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for="name">Category</label>
                      <input type="text" name="name" value="">
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" value="Save" class="btn btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>


  </div>


@endsection
