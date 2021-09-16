@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

                <button class="newPost"><a href="{{ route('posts.index')}}">See all posts</a></button>
                <button class="newPost"><a href="{{ route('posts.create')}}">Create post</a></button>

            <div class="post">
                <div>
                    <h2>{{ $post->author }}</h2>
                    <h3>{{ $post->date }}</h3>
                </div>
                <h1>{{ $post->title }}</h1>
                <p><?=nl2br($post->body)?></p> <!-- nl2br, my new best friend. -->
            </div>

            {{ $post->comments }} comments

            <br>
            <br>
            <br>

            @for ($i = 0; $i < $post->comments; $i++)
                <div class="comment">
                    COMMENTO
                </div>
            @endfor

        </div>
    </div>
</div>
@endsection