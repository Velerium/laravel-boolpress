@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        {{ $post->author }} <br> {{ $post->date }} <br> {{ $post->comments }} comments
        </div>
    </div>
</div>
@endsection