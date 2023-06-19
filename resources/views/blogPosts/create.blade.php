@extends('layout')

@section('content')
    <div class="home">
        <h1 class="animate">Create a new post!</h1>

        <form method="POST" action="/blog">
            @csrf
            <label>Title</label>
            <input
                type="text"
                name="title"
                value="{{old('title')}}"
            ><br><br>
            @error('title')
            <p>{{$errors->first('title')}}</p>
            @enderror

            <label>Excerpt</label>
            <input
                type="text"
                name="excerpt"
                value="{{old('excerpt')}}"
            ><br><br>
            @error('excerpt')
            <p>{{$errors->first('excerpt')}}</p>
            @enderror

            <label>Body</label>
            <textarea
                type="text"
                name="body"
                id="body"
            >{{old('body')}}</textarea><br><br>
            @error('body')
            <p>{{$errors->first('body')}}</p>
            @enderror

            <input type="submit" value="Submit">
        </form>
    </div>
@endsection
