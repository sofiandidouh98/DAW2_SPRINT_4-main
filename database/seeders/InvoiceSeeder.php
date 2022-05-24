<?php

namespace Database\Seeders;

use App\Models\Invoice;

use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Invoice::factory(50)->create();
        //Invoice::factory(50)->create();
        //
        /*
        $invoice = new Invoice();
        $invoice->total_no_tax = 36;
        $invoice->total_tax = 21;
        $invoice->total = 43.56;
        $invoice->notes = "Observació de prova.";
        $invoice->bar_code = 6789112;
        $invoice->qr_code = 43356;
        $invoice->delivered = 1;
        $invoice->id_user = 1;   
        
        $invoice->save();

        $invoice2 = new Invoice();
        $invoice->total_no_tax = 36;
        $invoice->total_tax = 21;
        $invoice->total = 43.56;
        $invoice->notes = "Observació de prova.";
        $invoice->bar_code = 6789112;
        $invoice->qr_code = 43356;
        $invoice->delivered = 1;
        $invoice->id_user = 1;   
        
        $invoice2->save();

        $invoice3 = new Invoice();
        $invoice->total_no_tax = 36;
        $invoice->total_tax = 21;
        $invoice->total = 43.56;
        $invoice->notes = "Observació de prova.";
        $invoice->bar_code = 6789112;
        $invoice->qr_code = 43356;
        $invoice->delivered = 1;
        $invoice->id_user = 1;   
        
        $invoice3->save();
        */
    }
}