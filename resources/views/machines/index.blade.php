@extends('templateAdmin')

@section('title', 'Màquines')

@section('content')

<script>

    function eliminarMaquina(machine) {
        document.getElementById("machine-name").innerHTML = machine.name;
        document.getElementById("machine").value = machine.id;

        $('#modalDeMaquines').modal({
            backdrop: 'static',
            keyboard: false
        })
    }

</script>

<div class="container info margin-top">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Màquines</li>
        </ol>
    </nav>
    <div class="xavero">
        @include('layout/banners/maquines.index')

        </div>
    <div class="titol-create">
        <div id="nomTitol">
            <h2 class="thin">Gestor de Màquines</h2>
        </div>
        <div id="divAfegir">
            <a class="add" href="{{ route('machines.create') }}"><i class="fa fa-plus fa-lg"></i></a>
        </div>
    </div>
    <hr class="margin-hr">
    <table id="tableadministradors" class="table table-striped nowrap">
        <thead class="thead-dark">
            <tr>
                <th id="no-border-top">ID</th>
                <th id="no-border-top">Nom</th>
                <th id="no-border-top">Marca</th>
                <th id="no-border-top">Model</th>
                <th id="no-border-top">Descripció</th>
                <th id="no-border-top">Preu</th>
                <th id="no-border-top">Número de serie</th>
                <th id="no-border-top">Codi de barres</th>
                <th id="no-border-top">Codi qr</th>
                <th id="no-border-top">Data d'inici</th>
                <th id="no-border-top">Imatge</th>
                <th id="no-border-top">Editar</th>
                <th id="no-border-top">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($machines as $machine)
            <tr>
                    <a href="{{route('machines.show', $machine)}}">
                      <div style="height:100%;width:100%">{{$machine->title}}  </div>
                    </a>
                </td-->
                <td>{{$machine->id}}</td>
                <td>{{$machine->name}}</td>
                <td>{{$machine->brand}}</td>
                <td>{{$machine->model}}</td>
                <td>{{$machine->description}}</td>
                <td>{{$machine->price}}</td>
                <td>{{$machine->serial_number}}</td>
                <td>{{$machine->bar_code}}</td>
                <td>{{$machine->qr_code}}</td>
                <td>{{$machine->starting_date}}</td>
                <td>{{$machine->image}}</td>

                <td><a href="{{route('machines.edit', $machine)}}" class="far fa-lg fa-edit edit-icon" id="icons-underline"></a></td>
                <td><a onclick="eliminarMaquina({{$machine}})" class="far fa-lg fa-trash-alt trash-icon" id="icons-underline"></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

    <div id="modalDeMaquines" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirma-ho</h4>
                </div>
                <form action="{{ route('machines.destroy') }}" method="POST">
    
                    @csrf
                        
                    @method('delete')

                    <input id="machine" name="id" hidden>
                    <div class="modal-body">
                        <p>Estàs segur de que vols esborrar la màquina <strong id="machine-name"></strong>?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-action" id="confirmarAdmin">Eliminar</button>
                        <button type="button" class="btn btn-secondary" id="cancel" data-dismiss="modal">Cancel·lar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{ $machines->links() }}


@endsection
{{--
@extends('layouts.plantilla')

@section('title', 'Màquines')

@section('content')
    <h1>Benvingut a màquines!</h1>
    <a href="{{route('machines.create')}}">Crear màquina</a>
    <ul>
        @foreach ($machines as $machine)
            <li>
                <a href="{{route('machines.show', $machine->id)}}">{{$machine->name}}</a>
            </li>            
        @endforeach
    </ul>

    {{$machines->links()}}

@endsection
--}}