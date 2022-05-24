@extends('templateAdmin')

@section('title', 'Veure usuaris')

@section('content')

<script type="text/javascript" src="{{ URL::asset('js/classes/Administrator.js') }}"></script>

@if (session('alert'))
    <div class="alert-position alert alert-success" id="alert" role="alert">
    <strong>S'ha {{ session('alert') }} satisfactòriament. </strong>Comprova en la taula d'usuaris el que has realitzat.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button></div>
@endif

    <div class="container info margin-top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Administradors</li>
            </ol>
        </nav>
        <div class="titol-create">
            <div id="nomTitol">
                <h2 class="thin">Gestor d'administradors</h2>
            </div>
            <div id="divAfegir">
                <a class="add" href="{{ route('administrators.create') }}"><i class="fa fa-plus fa-lg"></i></a>
            </div>
        </div>
        <hr class="margin-hr">
        <table id="tableadministradors" class="table table-striped nowrap">
            <thead class="thead-dark">
                <tr>
                    <!--Posa tots els th necessaris per a després mostrar i imprimir-->
                    <th id="no-border-top">Nom de l'usuari</th>
                    <th id="no-border-top">Cognom</th>
                    <th id="no-border-top">Correu electrònic</th>
                    <th id="no-border-top">DNI/NIE</th>
                    <th class="text-center" id="no-border-top">Contrasenya</th>
                    <th class="text-center" id="no-border-top">Editar</th>
                    <th class="text-center" id="no-border-top">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administrators as $administrator)
                <tr>
                    <td>{{$administrator->name}}</td>
                    <td>{{$administrator->last_name}}</td>
                    <td>{{$administrator->email}}</td>
                    <td>{{$administrator->id_card}}</td>
                    <td><a onclick="modificarPassAdministrador({{$administrator}})" class="fas fa-lg fa-key center" id="icons-underline"></a></td>
                    <td><a href="{{route('administrators.edit', $administrator)}}" class="far fa-lg fa-edit edit-icon center" id="icons-underline"></a></td>
                    <td><a onclick="eliminarAdministrador({{$administrator}})" class="far fa-lg fa-trash-alt trash-icon center" id="icons-underline"></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

        <div id="modalDelAdmin" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Confirma-ho</h4>
                    </div>
                    <form action="{{ route('administrators.destroy') }}" method="POST">

                        @csrf

                        @method('delete')

                        <input id="administrators" name="id" hidden>
                        <div class="modal-body">
                            <p>Estàs segur de que vols esborrar aquest usuari anomenat <strong id="admin-name"></strong> ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-action" id="confirmarAdmin">Eliminar</button>
                            <button type="button" class="btn btn-secondary" id="cancel" data-dismiss="modal">Cancel·lar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="modal-modPassAdministrador" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Canvia la contrasenya d'aquest usuari anomenat <strong id="adminNamePass"></strong></h4>
                    </div>
                    <form action="{{ route('administrators.updatePass') }}" method="post">
                        @csrf

                        @method('put')

                        <div class="modal-body">
                            <input type="hidden" id="idmodPassAdmin" name="id" />
                            <div class="col-pass-6 padding-right-pass">
                                <label>Nova contrasenya<span class="text-danger">*</span></label>
                                <input type="password" placeholder="Contrasenya" id="password" name="password" class="formulari-crear"/>
                            </div>
                            <div class="col-pass-6">
                                <label for="password-confirm">Confirma la contrasenya<span class="text-danger">*</span></label>
                                <input id="password-confirm" class="formulari-crear" type="password" class="form-control" name="password_confirmation" placeholder="Repeteix la contrasenya" autocomplete="new-password">
                            </div>
                            @error('password')
                                <br><small class="error">*{{$message}}</small><br>
                                <br>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-action" id="modconfirmarPassAdmin">Editar</button>
                            <button type="button" class="btn btn-secondary" id="modPasscancel" data-dismiss="modal">Cancel·lar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{ $administrators->links() }}

@endsection
