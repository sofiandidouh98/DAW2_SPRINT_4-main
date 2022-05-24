<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //main page
    public function index(){

        $invoices = Invoice::orderBy('id', 'desc')->paginate();

        return view('invoices.index', compact('invoices'));
    }

    //form create
    public function create(){
        return view('invoices.create');
    }

    public function store (Request $request) {
        $invoice = new Invoice();

        $invoice->created_at = $request->created_at;
        $invoice->updated_at = $request->updated_at;
        $invoice->total_no_tax = $request->total_no_tax;
        $invoice->total_tax = $request->total_tax;
        $invoice->total = $request->total;
        $invoice->notes = $request->notes;
        $invoice->bar_code = $request->bar_code;
        $invoice->qr_code = $request->qr_code;
        $invoice->delivered = $request->delivered;
        $invoice->id_user = $request->id_user;


        $invoice->save();

        return redirect()->route('invoices.index', $invoice);
    }
    //list
    public function show(Invoice $invoice){
        return view('invoices.show', compact('invoice'));
    }
    
    public function edit(Invoice $invoice){
        return view('invoices.edit', compact('invoice'));
    }

    public function update(Request $request, Invoice $invoice){
        $invoice->created_at = $request->created_at;
        $invoice->updated_at = $request->updated_at;
        $invoice->total_no_tax = $request->total_no_tax;
        $invoice->total_tax = $request->total_tax;
        $invoice->total = $request->total;
        $invoice->notes = $request->notes;
        $invoice->bar_code = $request->bar_code;
        $invoice->qr_code = $request->qr_code;
        $invoice->delivered = $request->delivered;
        $invoice->id_user = $request->id_user;


        $invoice->save();

        return redirect()->route('invoices.index', $invoice);
    }

    public function destroy(Request $request)
    {
        $invoice = Invoice::find($request->id);

        $invoice->delete();

        return redirect()->route('invoices.index');
    }
}