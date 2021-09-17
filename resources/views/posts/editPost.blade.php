@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="create" action="{{ route('posts.update', $post) }}" method="POST">

                @csrf
                @method('PUT')

                <div>
                    <label for="title">Titolo</label>
                    <input type="text" name="title" id="title" value="{{ $post->title }}">
                </div>

                <div class="postBody">
                    <label for="body">Post</label>
                    <textarea name="body" id="body" cols="40" rows="7">{{ $post->body }}</textarea>
                </div>
                
                <div>
                    <label for="categories">Categorie</label>
                    <input type="text" name="categories" id="categories" value="{{ $post->categories }}">
                </div>

                <div>
                    <label for="tags">Tag</label>
                    <input type="text" name="tags" id="tags" value="{{ $post->tags }}">
                </div>

                <input type="hidden" name="date" id="date" value="{{ $post->updated_at }}">

                <button class="newPost" type="submit">Salva modifiche</button>
                        
            </form>
        </div>
    </div>
</div>

@endsection