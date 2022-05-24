@extends('templateAdmin')

@section('head')

@section('title', 'Recursos')

@section('content')

<script type="text/javascript" src="{{ URL::asset('js/classes/Resource.js') }}"></script>

<div class="container info margin-top">  
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Home</a></li>
      <li class="breadcrumb-item"><a href="">Projectes</a></li>
      <li class="breadcrumb-item active">Recursos</li>
    </ol>
    </nav>
  
    <div class="titol-create">
        <div id="nomTitol">
            <h2 class="thin">Gestor de recursos</h2>
        </div>
        <div id="divAfegir">
            <a class="add" href="{{ route('resources.create') }}"><i class="fa fa-plus fa-lg"></i></a>
        </div>
    </div>
    <hr class="margin-hr">
    <br>

    <!-- Llistar -->

    <table id="tableadministradors" class="table table-striped nowrap">
      <thead class="thead-dark">
          <tr>
              <!--Posa tots els th necessaris per a després mostrar i imprimir-->
              <th id="no-border-top">Nom</th>
              <th id="no-border-top">Descripció</th>
              <th id="no-border-top">Proporcionat per</th>
              <th id="no-border-top">Projecte</th>
              <th id="no-border-top">Editar</th>
              <th id="no-border-top">Eliminar</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($resources as $resource)
          <tr>
              <td>{{$resource->name}}</td>
              <td>{{$resource->description}}</td>
              <td>{{$resource->provided_by}}</td>
              <td>{{$resource->id_project}}</td>
              <td><a href="{{route('resources.edit', $resource)}}" class="far fa-lg fa-edit edit-icon" id="icons-underline"></a></td>
              <td><a onclick="eliminarRecurs({{$resource}})" class="far fa-lg fa-trash-alt trash-icon center" id="icons-underline"></a></td>
          </tr>
          @endforeach 
      </tbody>
  </table>

</div>

<div id="modalRecurs" class="modal">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Confirma-ho</h4>
          </div>
          <form action="{{ route('resources.destroy') }}" method="POST">

              @csrf

              @method('delete')

              <input id="resources" name="id" hidden>
              <div class="modal-body">
                  <p>Estàs segur de que vols esborrar aquest recurs: <strong id="resource-name"></strong> ?</p>
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-action" id="confirmarAdmin">Eliminar</button>
                  <button type="button" class="btn btn-secondary" id="cancel" data-dismiss="modal">Cancel·lar</button>
              </div>
          </form>
      </div>
  </div>
</div>

{{ $resources->links() }}
@endsection