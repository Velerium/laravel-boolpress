@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

        <button class="newPost"><a href="{{ route('posts.create')}}">Create post</a></button>

        <table class="table">
            <thead>
                <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col-2">Post Title</th>
                <th scope="col">Author</th>
                <th scope="col">Categories</th>
                <th scope="col">Tags</th>
                <th scope="col"><i class="bi-chat-left-fill"></i></th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($postList as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->author}}</td>
                        <td>{{$post->categories}}</td>
                        <td>{{$post->tags}}</td>
                        <td class="text-center">{{$post->comments}}</td>
                        <td>{{$post->date}}</td>
                        <td class="actions">
                            <a href="{{ route('posts.show', $post) }}"><i class="bi bi-zoom-in"></i></a>
                            <a href="{{ route('posts.edit', $post) }}"><i class="bi bi-pencil-fill"></i></a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
