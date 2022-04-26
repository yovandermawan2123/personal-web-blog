@extends('layouts.main')

@section('container')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8 ">
           
                <h2>{{ $post->title }}</h2>
                <p>By <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                @if ($post->image)
                <div style="max-height:350px; overflow:hidden;">
                  <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-2">
                    
                </div>
        

              
                    @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-2">
             
                @endif
                <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
         
            
            <a href="/blog" class="d-block mt-3">Back to Posts</a>
            
            <h3 class="mb-3 mt-3">Comments</h3>
            
            @foreach ($comments as $comment)
            <div class="border border-1 rounded px-3 py-3 mb-3">
            <h6>{{ $comment->user->name }} : </h6>
    
            <div class="rounded px-2 py-2 " style="background-color: rgb(221, 221, 221)">
           <small>{{ $comment->body }}</small>
            </div>

          </div>

            @endforeach
         
         @auth

        

         <form action="/posts/{post:slug}" method="POST">
            @csrf
         <div class="mb-3">
            <input type="hidden" name="post_slug" value="{{ $post->slug }}">
             <input type="hidden" name="post_id" value="{{ $post->id }}">
            <label for="exampleFormControlTextarea1" class="form-label">{{ auth()->user()->name }} :</label>
            <textarea class="form-control" name="body" rows="3"></textarea>
            <div class="d-flex flex-row-reverse mt-2 mb-2">
            <button type="submit" class="btn btn-primary">Comment</button>
        </div>
          </div>

        </form>

          @else
          <a href="/login" class="btn btn-primary rounded mb-3">Login to adding a comment</a>
         @endauth
            



          
        </div>

    </div>

</div>


    @endsection
  
    
 