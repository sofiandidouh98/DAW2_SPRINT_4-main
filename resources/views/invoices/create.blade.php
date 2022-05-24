@extends('templateAdmin')

@section('created_at', 'Factures')

@section('content')
<script src="{{ asset('js/classes/Invoice.js') }}"></script>


<div class="container info margin-top">  
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ route('invoices.index') }}">Factures</a></li>
      <li class="breadcrumb-item active" aria-current="page">Crear factura</li>
    </ol>
    </nav>
  
    <div class="titol-create">
        <div id="nomTitol">
            <h2 class="thin">Sistema de facturació</h2>
        </div>
    </div>
    <hr class="margin-hr">
    <div class="content-invoice">
       
        <form action="{{ route('invoices.store') }}" method="post" class="formulari">
            @csrf
    
            <div class="row formulari">
              <div class="col-md-6">    
                 
                <label>Total sense iva<span class="text-danger">*</span></label>
                <input type="text" placeholder="Total sense iva" id="total_no_tax" name="total_no_tax" class="formulari-crear" value="{{old('total_no_tax')}}"/>
                <p class="error" id="errortotal_no_tax"></p>

                <label>Total amb iva<span class="text-danger">*</span></label>
                <input type="text" placeholder="Total amb iva" id="total_tax" name="total_tax" class="formulari-crear" value="{{old('total_tax')}}"/>
                <p class="error" id="errortotal_tax"></p>

                <label>Total<span class="text-danger">*</span></label>
                <input type="text" placeholder="Total" id="total" name="total" class="formulari-crear" value="{{old('total')}}"/>
                <p class="error" id="errortotal"></p>

                <label>Codi de barres<span class="text-danger">*</span></label>
                <input type="text" placeholder="Codi de barres" id="bar_code" name="bar_code" class="formulari-crear" value="{{old('bar_code')}}"/>
                <p class="error" id="errorbar_code"></p>

                <label>Codi QR<span class="text-danger">*</span></label>
                <input type="text" placeholder="Codi QR" id="qr_code" name="qr_code" class="formulari-crear" value="{{old('qr_code')}}"/>
                <p class="error" id="errorqr_code"></p>

                <label>Entregat<span class="text-danger">*</span></label>
                <input type="text" placeholder="Entregat" id="delivered" name="delivered" class="formulari-crear" value="{{old('delivered')}}"/>
                <p class="error" id="errordelivered"></p>

                <label>ID usuari<span class="text-danger">*</span></label>
                <input type="text" placeholder="ID usuari" id="id_user" name="id_user" class="formulari-crear" value="{{old('id_user')}}"/>
                <p class="error" id="errorid_user"></p>

                
              </div>
    
              <div class="col-md-6 margin-left-formulari">
                <label>Notes<span class="text-danger">*</span></label>
                <textarea placeholder="Notes" maxlength="1000" id="notes" name="notes" class="formulari-crear-textarea" value="{{old('notes')}}"></textarea>
                <p class="error" id="errornotes"></p>
  
            </div>
    
              <button type="button" class="formulari-send btn btn-action" onclick="Invoice.checkInvoice();return false;">Crear factura</button>
                </div>
            </div>
        </form>
    </div>
</div>





























{{--


    <form action="{{route('invoices.store')}}" method="POST">

    @csrf
    <label>Nom de la factura<span class="text-danger"> *</span></label>
    <input type="text" placeholder="Notes" id="notes" name="notes" class="formulari-crear" value="{{old('notes')}}"/>
    <p class="error" id="errornotes"></p>

        <label>
            Creat el:
            <br>
            <input type="text" name="created_at" class="formulari-crear" >
        </label>
        <br>

        <label>
            Actualitzat el:
            <br>
            <input type="text" name="updated_at" class="formulari-crear">
        </label>
        <br>

        <label>
            Total sense iva:
            <br>
            <input type="text" name="total_no_tax" class="formulari-crear">
        </label>
        <br>

        <label>
            Total amb iva:
            <br>
            <input type="text" name="total_tax" class="formulari-crear">
        </label>
        <br>

        <label>
            Total:
            <br>
            <input type="text" name="total">
        </label>
        <br>

        <label>
            Anotacions:
            <br>
            <textarea type="text" name="notes"></textarea>
        </label>
        <br>

        <label>
            Codi de barres:
            <br>
            <input type="text" name="bar_code">
        </label>
        <br>

        <label>
            Codi QR:
            <br>
            <input type="text" name="qr_code">
        </label>
        <br>

        <label>
            Entregat:
            <br>
            <input type="text" name="delivered">
        </label>
        <br>

        <label>
            Id usuari:
            <br>
            <input type="text" name="id_user">
        </label>
        <br>
        <button type="submit" onclick="Invoice.checkInvoice(); return false;">Enviar factura</button>
    </form>


    --}}
@endsection

