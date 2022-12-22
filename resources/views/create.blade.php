@extends("home")

@section("content")
<form action="{{ route('posts.store') }}" method="POST">
{{ csrf_field() }}  
<div class="form-group">
    <label for="exampleTitle">Title</label>
    <input type="text" name="title" class="form-control" id="exampleTitle" aria-describedby="emailHelp" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="exampleDescription">Description</label>
    <input type="text" name="description" class="form-control" id="exampleDescription" placeholder="Description">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection