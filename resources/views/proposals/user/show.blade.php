@extends('templateUser')

@section('title', 'Propostes' . $proposal->title)

@section('content')

<script src="{{ asset('js/Proposal.js') }}" defer></script>

<div class="container info margin-top">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboardUsuaris.php">Home</a></li>
            <li class="breadcrumb-item"><a href="proposta.php">Propostes</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $proposal->title }}</li>
        </ol>
    </nav>
    <h2 class="thin"  style="text-transform: capitalize;"></h2>
    <hr>

    <div class="row">
        <div class="col-lg-9">
            <div class="margin-bottom">
                <h5>{{ $proposal->id }} / {{ $proposal->location }}</h5>
                    <img class="imatge-proposta" alt="{{ $proposal->title }}" src="https://cdn.wallpapersafari.com/73/8/rZJVIa.jpg">
                    <p>{{ $proposal->description }}</p>
            </div>
        </div>
        
        <div class="col-lg-3">
            <a href="{{route('proposals.edit', $proposal)}}" class="far fa-lg fa-edit edit-icon" id="icons-underline"></a>
            <h4 class="bold subrayado categoria">Categoria</h4>
            <h5 class="margin-categoria">{{ $proposal->category }}</h5>
            <h4 class="bold subrayado compartir">Compartir</h4>
            <div class="widget-body">
                <p class="follow-me-icons compartir">
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fa fa-envelope fa-2"></i></a>
                    <a href=""><i class="fab fa-facebook"></i></a>
                </p>
            </div>

            

            <h4 class="bold subrayado documents">Documents adjunts</h4>
            <a href="proposta.pdf">
                <h5 class="margin-categoria">proposta.pdf</h5>
            </a>
            <button class="formulari-send btn btn-action" onclick="Proposal.passToProject({{ $proposal }})" >Crear Projecte</button>
            <!--input class="formulari-send btn btn-action " type="submit" name="enviar" value="Contacta amb el promotor" /-->
            

            <!--Modal Crea Projecte-->
            <div id="modalPassProject" class="modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Confirma-ho</h4>
                    </div>
                    <form action="{{ route('proposals.toProject') }}" method="POST">
        
                        @csrf

                        <input id="proposal" name="id" hidden>
                        <div class="modal-body">
                            <p>Estas segur que vols fer un projecte?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="confirmar">Confirmar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel·lar</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection