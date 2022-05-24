@extends('templateAdmin')

@section('title', 'Project' . $project->title)




@section('content')

<div class="container info margin-top">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('indexAdmin.list')}}">projectes</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $project->title }}</li>
        </ol>
    </nav>
    <h2 class="thin"  style="text-transform: capitalize;"></h2>
    <hr>

    <div class="row">
        <div class="col-lg-9">
            <div class="margin-bottom">
                <h5>{{ $project->id }} / {{ $project->location }}</h5>
                    <img class="imatge-proposta" alt="{{ $project->title }}" src="https://cdn.wallpapersafari.com/73/8/rZJVIa.jpg">
                    <p>{{ $project->description }}</p>
            </div>
        </div>

        <div class="col-lg-3">
            <h4 class="bold subrayado categoria">Categoria</h4>
            <h5 class="margin-categoria">{{ $project->category }}</h5>
            <h4 class="bold subrayado compartir">Compartir</h4>
            <div class="widget-body">
                <p class="follow-me-icons compartir">
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fa fa-envelope fa-2"></i></a>
                    <a href=""><i class="fab fa-facebook"></i></a>
                </p>
            </div>



            <a href="{{route('tasks.index',$project->id)}}"><button type="button" class="btn btn-primary"  id="tasks">Gestor de tasques</button></a>

            <!--input class="formulari-send btn btn-action " type="submit" name="enviar" value="Contacta amb el promotor" /-->

            <!--<ul>
                @foreach ($project->documents as $document)
                    <li>
                        <a href="{{asset("/storage/".$document->name)}}" target="_blank">{{$document->name}}</a>
                    </li>
                @endforeach
            </ul>-->

        </div>
    </div>
</div>


@endsection
