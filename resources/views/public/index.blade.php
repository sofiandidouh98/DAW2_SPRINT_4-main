@extends('templatePublic')

@section('title', 'InitLab')

@section('content')

<header id="head">
    <div class="container">
        <div class="row center column-direct">
            <h1 class="lead animate__animated animate__zoomInDown">FabLab Terres de l'Ebre</h1>
        </div>
    </div>
</header>

@include('public.banner')

<div class="container text-center">
    <br> <br>
    <h2 class="thin">Fablab (Terres de l'Ebre) vol ser un punt de trobada de persones amb talent i idees revolucionàries de la nostra comarca.</h2>
    <p class="text-muted">Un punt on compartir i on tenir accés a les eines de fabricació per tal de facilitar el treball de fabricació d'elements físics.</p>
    <p class="text-muted">Un espai de formació per a joves i grans.</p>
    <p class="text-muted">Punt de trobada de societat, indústria i educació.</p>
    <p class="text-muted">Avui encara no tenim màquines perquè estem treballant en la rehabilitació del local.</p>
    <br> <br>
    <!--WIP-->
    <div>
        <h3>Què és InitLab?</h3>
        <hr>
        <br>
        <div>
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/bX7p4ydjPNU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>   
        
    </div>

</div>

@include('layout.bannerProjectes')

@endsection