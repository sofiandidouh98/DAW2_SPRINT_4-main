@extends('templateAdmin')

@section('title', 'Gestor de Documents')

@section('content')

<script>

    function eliminarDocument(documents) {
        document.getElementById("document-name").innerHTML = documents.name;
        document.getElementById("document").value = documents.id;

        $('#modalDelDocuments').modal({
            backdrop: 'static',
            keyboard: false
        })
    }

</script>

<div class="container info margin-top">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Documents</li>
        </ol>
    </nav>
    <div class="titol-create">
        <div id="nomTitol">
            <h2 class="thin">Gestor de documents</h2>
        </div>
        <div id="divAfegir">
            <a class="add" href="{{ route('documents.create') }}"><i class="fa fa-plus fa-lg"></i></a>
        </div>
    </div>
    <hr class="margin-hr">
    <table id="tableadministradors" class="table table-striped nowrap">
        <thead class="thead-dark">
            <tr>
                <!--Posa tots els th necessaris per a després mostrar i imprimir-->
                <th id="no-border-top">Id</th>
                <th id="no-border-top">Nom</th>
                <th id="no-border-top">Data creació</th>
                <th id="no-border-top">Darrera actualització</th>
                <th id="no-border-top">Tipus</th>
                <th id="no-border-top">Projecte</th>
                <th id="no-border-top">Usuari</th>
                <th id="no-border-top">Editar</th>
                <th id="no-border-top">Eliminar</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($documents as $document)
            <tr>
                <!--Aquest es el exemple per si es vol crear una pàgina per a crear una pàgina
                per a mostrar tota la informació-->
                <!--td>
                    <a href="{{route('documents.show', $document)}}">
                      <div style="height:100%;width:100%">{{$document->name}}  </div>
                    </a>
                </td-->
                <!--Aquest es el exemple per si no voleu crear un link-->
                <td>{{$document->id}}</td>
                <td>

                    <a href="{{asset("/storage/".$document->name)}}" target="_blank">{{$document->name}}</a>

                </td>
                <td>{{$document->created_at}}</td>
                <td>{{$document->updated_at}}</td>
                <td>{{$document->type->name}}</td>
                <td>{{$document->project->title}}</td>
                <td>{{$document->user->name}}</td>

                <td><a href="{{route('documents.edit', $document)}}" class="far fa-lg fa-edit edit-icon" id="icons-underline"></a></td>
                <td><a onclick="eliminarDocument({{$document}})" class="far fa-lg fa-trash-alt trash-icon" id="icons-underline"></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

    <div id="modalDelDocuments" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirma</h4>
                </div>
                <form action="{{ route('documents.destroy') }}" method="POST">

                    @csrf

                    @method('delete')

                    <input id="document" name="id" hidden>
                    <div class="modal-body">
                        <p>Estàs segur de que vols esborrar aquest document <strong id="document-name"></strong> ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-action" id="confirmarAdmin">Eliminar</button>
                        <button type="button" class="btn btn-secondary" id="cancel" data-dismiss="modal">Cancel·lar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{ $documents->links() }}

@endsection
