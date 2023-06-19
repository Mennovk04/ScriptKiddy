@extends ('layout')
@section ('content')

<style>
    .error {
        font-size: 30px;
        color: red;
    }
    a {
        font-size: 20px;
        text-decoration: underline;
    }
</style>


<div class="home">
    <h1 class="error">404</h1>
    <h1 class="error">De pagina is niet gevonden</h1>
    <img src="{{url('/images/404-Pages.jpg')}}" alt="404" width="500" height="300">
    <p>Het lijkt erop dat de pagina die je wil bezoeken niet bestaat!</p>
    <a href="welcome">Klik hier om terug te gaan naar de home pagina!</a>
</div>
@endsection
