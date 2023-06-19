@extends('layout')

@section('content')
    <div class="home">
        <h1 class="animate">Edit post</h1>

        <form method="POST" action="/blog/{{ $article->id }}">
            @csrf
            @method('PUT')
            <label>Title</label>
            <input type="text" name="title" id="title" value="{{$article->title}}"><br><br>

            <label>Excerpt</label>
            <input type="text" name="excerpt" id="excerpt" value="{{$article->excerpt}}"><br><br>

            <label>Body</label>
            <textarea type="text" name="body" id="body">{{$article->body}}</textarea><br><br>

            <input type="submit" value="Submit">
        </form>

        <form method="POST"action="/blog/{{ $article->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection
