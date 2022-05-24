@extends('templateAdmin')

@section('title', 'Factures')

@section('content')

<script type="text/javascript" src="{{ URL::asset('js/classes/Invoice.js') }}"></script>


<div class="container info margin-top">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Factures</li>
        </ol>
    </nav>
    <div class="xavero">
        @include('layout/banners/factures.index')

        </div>
    <div class="titol-create">
        <div id="nomTitol">
            <h2 class="thin">Gestor de Factures</h2>
        </div>
        <div id="divAfegir">
            <a class="add" href="{{ route('invoices.create') }}"><i class="fa fa-plus fa-lg"></i></a>
        </div>
    </div>
    <hr class="margin-hr">
    <table id="tableadministradors" class="table table-striped nowrap">
        <thead class="thead-dark">
            <tr>
                <th id="no-border-top">ID</th>
                <th id="no-border-top">Usuari</th>
                <th id="no-border-top">Total</th>
                <th id="no-border-top">Notes</th>
                <th id="no-border-top">Codi de barres</th>
                <th id="no-border-top">Entregada</th>
                <th id="no-border-top">Editar</th>
                <th id="no-border-top">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
            <tr>
                    <a href="{{route('invoices.show', $invoice)}}">
                      <div style="height:100%;width:100%">{{$invoice->title}}  </div>
                    </a>
                </td-->
                <td>{{$invoice->id}}</td>
                <td>{{$invoice->id_user}}</td>
                <td>{{$invoice->total}}</td>
                <td>{{$invoice->notes}}</td>
                <td>{{$invoice->bar_code}}</td>
                <td>{{$invoice->delivered}}</td>

                <td><a href="{{route('invoices.edit', $invoice)}}" class="far fa-lg fa-edit edit-icon" id="icons-underline"></a></td>
                <td><a onclick="eliminarFactura({{$invoice}})" class="far fa-lg fa-trash-alt trash-icon" id="icons-underline"></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

    <div id="modalDeFactures" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirma-ho</h4>
                </div>
                <form action="{{ route('invoices.destroy') }}" method="POST">
    
                    @csrf
                        
                    @method('delete')

                    <input id="invoice" name="id" hidden>
                    <div class="modal-body">
                        <p>Estàs segur de que vols esborrar la factura <strong id="invoice-id"></strong> del usuari <strong>usuari</strong>?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-action" id="confirmarAdmin">Eliminar</button>
                        <button type="button" class="btn btn-secondary" id="cancel" data-dismiss="modal">Cancel·lar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{ $invoices->links() }}


@endsection