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
                
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="category_id">Choose</label>
                        </div>
                        <select class="custom-select" id="category_id" name="category_id">
                            <option selected>{{ $post->category->name }}</option>
                            @foreach($categories as $category)
                                @if ($category->name !== $post->category->name)
                                    <option value="{{$category->id}}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div>
                    <label for="tags">Tag</label>
                    <input type="text" name="tags" id="tags" value="{{ $post->tags }}">
                </div>

                <input type="hidden" name="date" id="date" value="{{ $post->updated_at }}">

                <input type="hidden" name="author" id="author" value="{{ $post->author }}">

                <input type="hidden" name="comments" id="comments" value="{{ $post->comments }}">

                <button class="newPost" type="submit">Salva modifiche</button>
                        
            </form>
        </div>
    </div>
</div>

@endsection