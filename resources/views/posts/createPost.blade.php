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

            <form class="create" action="{{ route('posts.store') }}" method="post">
                @csrf

                <div>
                    <label for="title">Titolo</label>
                    <input type="text" name="title" id="title">
                </div>

                <div class="postBody">
                    <label for="title">Post</label>
                    <textarea name="title" id="title" cols="40" rows="7"></textarea>
                </div>
                
                <div>
                    <label for="categories">Categorie</label>
                    <input type="text" name="categories" id="categories">
                </div>

                <div>
                    <label for="tags">Tag</label>
                    <input type="text" name="tags" id="tags">
                </div>

                <input type="hidden" name="date" id="date" value="2021-09-16">

                <input type="hidden" name="comments" id="comments" value="0">

                <input type="hidden" name="author" id="author" value="Me">

                <button class="newPost" type="submit" value="send">Crea post</button>
                        
            </form>
        </div>
    </div>
</div>

@endsection