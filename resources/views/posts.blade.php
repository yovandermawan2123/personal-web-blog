@extends('layouts.main')

@section('container')

<div class="row mb-2">
  <div class="col-md-6">
    <h2>{{ $title }}</h2>
  </div>
  <div class="col-md-6">
    <form action="/posts">
      @if (request('category'))
      <input type="hidden" name="category" value="{{ request('category') }}">
          
      @endif
      @if (request('author'))
      <input type="hidden" name="author" value="{{ request('author') }}">
      
     
      @endif
      <div class="input-group ">
        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}" >
        <button class="btn btn-primary" type="submit" >Search</button>
      </div>
    </form>
  </div>
</div>

<hr>


@if ($posts->count())
<div class="card mb-3">

  @if ($posts[0]->image)
  <div style="max-height:350px; overflow:hidden;">
    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">

  </div>

 


      @else
      <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">

  @endif
  
    <div class="card-body text-center">
      <h3 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
      <small class="text-muted"><p>By <a class="text-decoration-none" href="/posts?author={{  $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none " href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</p></small>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read More</a>
    </div>
  </div>


<div class="container">
  <div class="row">
    @foreach ($posts->skip(1) as $post)
        
   
    <div class="col-md-4 mb-3">

      <div class="card" >
        <div class="position-absolute  px-3 py-2 " style="background-color: rgba(0,0,0,0.7);"><a class="text-decoration-none text-white" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></div>

        <div class="position-absolute ms-auto px-3 py-2 " style="background-color: rgba(0,0,0,0.7);right:0%;"><a class="text-decoration-none text-white" href="/posts?category={{ $post->category->slug }}"><i class="bi bi-eye text-white"></i><small> {{ $post->post_views }}</small></a></div>
        
        @if ($post->image)

          <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">

  
   
       

      
            @else
              
        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
     
        @endif
    
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <small class="text-muted"><p>By <a class="text-decoration-none" href="/posts?author={{  $post->author->username }}">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}</p></small>
          <p class="card-text">{{ $post->excerpt }}</p>
          <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

@else
<p class="text-center fs-4">No Post Found.</p>
@endif

<div class="d-flex justify-content-end ">
{{ $posts->links() }}
</div>

@endsection


