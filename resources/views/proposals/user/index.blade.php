@extends('templateUser')

@section('title', 'Propostes')

@section('content')

<div class="container info margin-top">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Propostes</li>
        </ol>
    </nav>
    <div class="titol-create">
        <div id="nomTitol">
            <h2 class="thin">Propostes</h2>
        </div>
        <div id="divAfegir">
            <a class="add" href="{{ route('proposals.create') }}"><i class="fas fa-plus fa-lg"></i></a>
        </div>
    </div>
    <hr class="margin-hr">

    <!-- mostrar les propostes --> 
    <div id="galPropostesUser"class="galPropostes">
                @foreach ($proposals as $proposal)
                <div class='galProposta'>
                    <a  class='link' href="{{ route('proposals.show', $proposal) }}"><img src='https://media.istockphoto.com/vectors/image-preview-icon-picture-placeholder-for-website-or-uiux-design-vector-id1222357475?k=20&m=1222357475&s=612x612&w=0&h=jPhUdbj_7nWHUp0dsKRf4DMGaHiC16kg_FSjRRGoZEI=' /></a>
                        <h3> <strong>{{$proposal->title}}</strong></h3>
                	    <p><strong style='color: #464545;'>Categoria:  </strong>{{$proposal->category}}</p>
                        <p><strong style='color: #464545;'>Descripció:  </strong>{{$proposal->description}}</p></a>
                    </div>
                @endforeach
            </div>
        </div>

        {{ $proposals->links() }}

@endsection