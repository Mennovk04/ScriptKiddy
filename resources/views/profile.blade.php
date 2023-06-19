@extends('layout')
@section('content')
<style>
    .home {
        color: white;
    }
</style>
<div class="home">
    <h1 class="animate">Profiel</h1>
    <p>Ik ben Menno van Kranenburg. Ik woon in de buurt van de HZ, in het dorp Oost-Souburg. Daar woon ik samen met
        mijn ouders en mijn zusje.</p>
    <p>Voordat ik naar de HZ kwam heb ik op de Nehalennia Breeweg in Middelburg gezeten waar ik mijn Havo diploma heb
        gehaald.</p>
    <p>In mijn vrije tijd doe ik graag:
    <ul id="hobby">
        <li>Muziek luisteren</li>
        <li>Gamen</li>
        <li>Fotos en Filmpjes maken met mijn drone</li>
    </ul>
    <div id="foto">
        <img src="images/boulevard.JPG" alt="boulevard" width="400" height="225">
        <img src="images/souburg.JPG" alt="boulevard" width="400" height="225">
        <pre font-family: sans-serif>De boulevard van Vlissingen                                      Oost-Souburg</pre>
    </div>
    <p>Naast mijn hobbies en school werk ik al bijna twee jaar bij de Albert Heijn XL in vlissingen</p>
    <p>Voordat ik naar naar de HZ ging heb ik op de Nehalennia Breeweg in Middelburg gezeten. Hier heb ik mijn Havo
        diploma gehaald nadat ik eerst 4 jaar vwo gedaan heb en daarna Havo 4 & 5.</p>
    <p></p>
    <p></p>
    </h1>
</div>
    @endsection
