@extends('layouts.main')

@section('saturs')


    <form action="/submit-newblogpost" method="post">
      <div class="form-group">
        <label for="exampleInputPassword1">Title</label>
        <input name="title" type="text" class="form-control" >
        
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Image Url</label>
        <input name="img_url" type="text" class="form-control" >
        
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Body</label>
        <textarea name="body" class="form-control" rows="10"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Excerpt</label>
        <textarea name="excerpt" class="form-control" rows="1"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Slug</label>
        <input name="slug" type="text" class="form-control" >
        
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Tags</label>
        <input name="tags" type="text" class="form-control" >
        
      </div> 

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
