@extends('layouts.main')

@section('saturs')

<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        
        @foreach ($posts as $postItem)

            @include('partials.blog-post')

        @endforeach
      
      </div>
    </div>
  </div>
@endsection
