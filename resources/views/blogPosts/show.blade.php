@extends('layout')
@section('content')
    <div class="home">
        <h1 class="animate">Blogposts:</h1>
        <ul>
                <li>
                    <h3>{{$article -> title}}</h3>
                    <p>{{$article -> body}}</p>
                </li>
        </ul>
    </div>
@endsection
