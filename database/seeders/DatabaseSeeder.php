<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Document;
use App\Models\DocumentType;
use App\Models\Machine;
use App\Models\Invoice;
use App\Models\Message;
use App\Models\Reservation;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(DocumentsTypeSeeder::class);
        $this->call(TasksStateSeeder::class);
        $this->call(UserTypeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(InvoiceSeeder::class);
        // $this->call(ReservationSeeder::class);
        $this->call(MachineSeeder::class);
        // Message::factory(30)->create();
        $this->call(StateProposalProjectSeeder::class);
        $this->call(ProposalSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(TaskSeeder::class);
        $this->call(IncidentStateSeeder::class);
        $this->call(DocumentSeeder::class);
    }
}