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

            <form class="create" action="{{ route('posts.store')}}" method="post">
                @csrf

                <div>
                    <label for="title">Titolo</label>
                    <input type="text" name="title" id="title">
                </div>

                <div class="postBody">
                    <label for="body">Post</label>
                    <textarea name="body" id="body" cols="40" rows="7"></textarea>
                </div>

                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="category_id">Choose</label>
                        </div>
                        <select class="custom-select" id="category_id" name="category_id">
                            <option selected>Pick a category...</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div>
                    <label for="tags">Tag</label>
                    <input type="text" name="tags" id="tags">
                </div>

                <input type="hidden" name="date" id="date" value="2021-09-17">

                <input type="hidden" name="comments" id="comments" value="0">

                <input type="hidden" name="author" id="author" value="{{ Auth::user()->name }}">

                <button class="newPost" type="submit" value="send">Crea post</button>
                        
            </form>
        </div>
    </div>
</div>

@endsection