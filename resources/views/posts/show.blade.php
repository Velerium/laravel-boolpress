@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

                <button class="newPost"><a href="{{ route('posts.index')}}">See all posts</a></button>
                <button class="newPost"><a href="{{ route('posts.create')}}">Create post</a></button>

            <div class="post">
                <div class="post-details">
                    <div>Author: <h3>{{ $post->author }}</h3></div> 
                    <div>Category:<h4> {{ $post->category->name }}</h4></div> 
                    <div><h4>{{ $post->date }}</h4></div>
                </div>
                <h1 class="text-center">{{ $post->title }}</h1>
                <p><?=nl2br($post->body)?></p> <!-- nl2br, my new best friend. -->
            </div>

            {{ $post->comments }} comments

            <br>
            <br>
            <br>

            @for ($i = 0; $i < $post->comments; $i++)

                <div class="comment">
                    COMMENT {{$i+1}}
                </div>
            @endfor

        </div>
    </div>
</div>
@endsection