@extends("home")

@section("content")
<h1>Edit Blog Post</h1> 
<form action="{{ route('posts.update', $posts->id) }}" method="POST">
@method('PUT')

{{ csrf_field() }}  
<div class="form-group">
    <label for="exampleTitle">Title</label>
    <input type="text" name="title" class="form-control" id="exampleTitle" aria-describedby="emailHelp" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="exampleDescription">Description</label>
    <input type="text" name="description" class="form-control" id="exampleDescription" placeholder="Description">
  </div>
  <input type="hidden" name="id" value="{{ $posts->id }}">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection