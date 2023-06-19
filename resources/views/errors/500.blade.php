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
    <h1 class="error">500</h1>
    <h1 class="error">Internal server error</h1>
    <img src="{{url('/images/500-Pages.png')}}" alt="404" width="500" height="300">
    <p>Sorry! Het lijkt erop dat de server niet werkt zoals het zou moeten.</p>
    <p>Probeer de pagina te refreshen of klik hieronder om terug te gaan naar de home pagina!</p>
    <a href="welcome">Klik hier om terug te gaan naar de home pagina!</a>
</div>
@endsection
