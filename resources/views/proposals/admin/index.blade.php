@extends('templateAdmin')

@section('title', 'Propostes')

@section('content')

<script src="{{ asset('js/Proposal.js') }}" defer></script>

    <div class="container info margin-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Propostes</li>
            </ol>
        </nav>
        <div class="titol-create">
            <div id="nomTitol">
                <h2 class="thin">Gestor de propostes</h2>
            </div>
            <div id="divAfegir">
                <a class="add" href="{{ route('proposals.createAdmin') }}"><i class="fa fa-plus fa-lg"></i></a>
            </div>
        </div>
        <hr class="margin-hr">
        <table id="tableadministradors" class="table table-striped nowrap">
            <thead class="thead-dark">
                <tr>
                    <!--Posa tots els th necessaris per a després mostrar i imprimir-->
                    <th id="no-border-top">Titol</th>
                    <th id="no-border-top">Categoria</th>
                    <th id="no-border-top">Localitzacio</th>
                    <th id="no-border-top">Data</th>
                    <th id="no-border-top">Descripció</th>
                    <th id="no-border-top">Editar</th>
                    <th id="no-border-top">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proposals as $proposal)
                <tr>

                    <td><a  class="show-proposal" href="{{ route('proposals.showAdmin', $proposal) }}">{{$proposal->title}}</a></td>
                    <td>{{$proposal->category}}</td> 
                    <td>{{$proposal->location}}</td>
                    <td>{{$proposal->created_at}}</td>
                    <td>{{$proposal->description}}</td>
                    <td><a href="{{route('proposals.edit', $proposal)}}" class="far fa-lg fa-edit edit-icon" id="icons-underline"></a></td>
                    <td><a onclick="Proposal.deleteProposal({{$proposal}})" class="far fa-lg fa-trash-alt trash-icon" id="icons-underline"></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

        <div id="modalDelPropostals" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Confirma-ho</h4>
                    </div>
                    <form action="{{ route('proposals.destroy') }}" method="POST">
        
                        @csrf
                            
                        @method('delete')

                        <input id="proposal" name="id" hidden>
                        <div class="modal-body">
                            <p>Estàs segur de que vols esborrar aquesta proposta anomenada <strong id="proposal-title"></strong> ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-action" id="confirmarAdmin">Eliminar</button>
                            <button type="button" class="btn btn-secondary" id="cancel" data-dismiss="modal">Cancel·lar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{ $proposals->links() }}

@endsection