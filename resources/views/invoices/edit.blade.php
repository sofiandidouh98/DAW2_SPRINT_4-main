@extends('templateAdmin')

@section('title', 'Factures' . $invoice->id)

@section('content')
       
<div class="container info margin-top">  
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('invoices.index') }}">Factures</a></li>
            <li class="breadcrumb-item active" aria-current="page">Actualitzar factura</li>
        </ol>
    </nav>
    
    <div class="titol-update">
        <div id="nomTitol">
            <h2 class="thin">Actualització de la factura - {{ $invoice->id }} </h2>
        </div>
    </div>
    <hr class="margin-hr">

    <form action="{{ route('invoices.update', $invoice) }}" method="post" class="formulari">
        @csrf

        @method('put')

        <div class="row formulari">
            <div class="col-md-6">
                {{--

                <label>Creat el<span class="text-danger">*</span></label>
                <input type="datetime-local" placeholder="Creat el" id="created_at" name="created_at" class="formulari-crear" value="{{$invoice->created_at}}"/>

                <label>Actualitzat el<span class="text-danger">*</span></label>
                <input type="datetime-local" placeholder="Actualitzat el" id="updated_at" name="updated_at" class="formulari-crear" value="{{$invoice->updated_at}}"/>
                --}}
                <label>Total sense iva<span class="text-danger">*</span></label>
                <input type="text" placeholder="Total sense iva" id="total_no_tax" name="total_no_tax" class="formulari-crear" value="{{$invoice->total_no_tax}}"/>

                <label>Total amb iva<span class="text-danger">*</span></label>
                <input type="text" placeholder="Total amb iva" id="total_tax" name="total_tax" class="formulari-crear" value="{{$invoice->total_tax}}"/>

                <label>Total<span class="text-danger">*</span></label>
                <input type="text" placeholder="Total" id="total" name="total" class="formulari-crear" value="{{$invoice->total}}"/>

                <label>Codi de barres<span class="text-danger">*</span></label>
                <input type="text" placeholder="Codi de barres" id="bar_code" name="bar_code" class="formulari-crear" value="{{$invoice->bar_code}}"/>

                <label>Codi QR<span class="text-danger">*</span></label>
                <input type="text" placeholder="Codi QR" id="qr_code" name="qr_code" class="formulari-crear" value="{{$invoice->qr_code}}"/>

                <label>Entregat<span class="text-danger">*</span></label>
                <input type="text" placeholder="Entregat" id="delivered" name="delivered" class="formulari-crear" value="{{$invoice->delivered}}"/>

                <label>ID usuari<span class="text-danger">*</span></label>
                <input type="text" placeholder="ID usuari" id="id_user" name="id_user" class="formulari-crear" value="{{$invoice->id_user}}"/>
                <p class="error" id="errorid_user"></p>

            </div>
            <div class="col-md-6 margin-left-formulari">
                <label>Notes<span class="text-danger">*</span></label>
                <textarea placeholder="Notes" maxlength="1000" id="notes" name="notes" class="formulari-crear-textarea">{{$invoice->notes}}"</textarea>
        
                <p class="error" id="errornotes"></p>
              </div>

            <button class="formulari-send btn btn-action" type="submit">Actualitzar factura</button>
        </div>
    </form>
</div>
@endsection