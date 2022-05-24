@extends('layouts.plantilla')

@section('title', 'Factura' . $invoice)

@section('content')
    <h1>Benvingut a la factura  {{$invoice->notes}}!</h1>
    <a href="{{route('invoices.index')}}">Torna</a>
    <br>
    <a href="{{route('invoices.edit', $invoice)}}">Editar factura</a>
    <p>Total: {{$invoice->total}}</p>
@endsection