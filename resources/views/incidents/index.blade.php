@extends('templateAdmin')

@section('title', 'Incidents')

@section('content')


<!-- JavaScript-->
    
<script>

    function deleteIncident(incident) {
        document.getElementById("incident-title").innerHTML = incident.title;
        document.getElementById("incident").value = incident.id;

        $('#modalIncidencies').modal({
            backdrop: 'static',
            keyboard: false
        })
    }

</script>

    <div class="container info margin-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Incidencies</li>
            </ol>
        </nav>
        <div class="titol-create">
            <div id="nomTitol">
                <h2 class="thin">Gestor de Incidencies</h2>
            </div>
            <div id="divAfegir">
               <a class="add" href="{{ route('incidents.create') }}"><i class="fa fa-plus fa-lg"></i></a>
            </div>
        </div>
        <hr class="margin-hr">
        <table id="tableadministradors" class="table table-striped nowrap">
            <thead class="thead-dark">
                <tr>
                    <!--Posa tots els th necessaris per a després mostrar i imprimir-->
                    <th id="no-border-top">Titol</th>
                    <th id="no-border-top">Maquina</th>
                    <th id="no-border-top">Usuari</th>
                    <th id="no-border-top">Descripció</th>
                    <th id="no-border-top">Estat</th>
                    <th id="no-border-top">Editar</th>
                    <th id="no-border-top">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($incident as $incident)
                <tr>
                    <!--Aquest es el exemple per si es vol crear una pàgina per a crear una pàgina
                    per a mostrar tota la informació-->
                    <!--td>
                    
                          <div style="height:100%;width:100%">{{$incident->title}}  </div>
                        </a>
                    </td-->
                    <!--Aquest es el exemple per si no voleu crear un link-->
                    <td>{{$incident->title}}</td>
                    <td>{{$incident->nameMaquina}}</td>
                    <td>{{$incident->nameUser}}</td>
                    <td>{{$incident->description}}</td>
                    <td>{{$incident->estat}}</td>
                    <td><a href="{{route('incidents.edit', $incident)}}" class="far fa-lg fa-edit edit-icon" id="icons-underline"></a></td>
                    <td><a onclick="deleteIncident({{$incident}})" class="far fa-lg fa-trash-alt trash-icon" id="icons-underline"></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div id="modalIncidencies" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirma-ho</h4>
                </div>
                <form action="{{ route('incidents.destroy') }}" method="POST">
    
                    @csrf
                        
                    @method('delete')

                    <input id="incident" name="id" hidden>
                    <div class="modal-body">
                        <p>Estàs segur de que vols esborrar aquesta incidencia anomenada <strong id="incident-title"></strong> ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-action" id="confirmarAdmin">Eliminar</button>
                        <button type="button" class="btn btn-secondary" id="cancel" data-dismiss="modal">Cancel·lar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection