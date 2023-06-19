@extends('layout')
@section('content')
<style>
    .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }
    </style>
    <div class="home">
        <h1 class="animate">Blog:</h1>
        <a class="button" href="blog/create">Create a new Post!</a>
        <ul>
        @foreach($articles as $article)
            <li>
                <h3><a  href="/blog/{{$article -> id}}">{{$article -> title}}</a></h3>
                <p>{{$article -> excerpt}}</p>
            </li>
        @endforeach
        </ul>
        </ul>
    </div>
@endsection
