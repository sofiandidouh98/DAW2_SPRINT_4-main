<?php

namespace Database\Seeders;

use App\Models\Machine;
use Illuminate\Database\Seeder;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Machine::factory(50)->create();
        /*
        $machine = new Machine();

        $machine->name = "Maquina1";
        $machine->brand = "JVM";
        $machine->model = "1.8";
        $machine->description = "Maquina de prova";
        
        $machine->save();

        $machine2 = new Machine();

        $machine2->name = "Maquina2";
        $machine2->brand = "JVM";
        $machine2->model = "1.8";
        $machine2->description = "Maquina de prova 2";

        $machine2->save();

        $machine3 = new Machine();

        $machine3->name = "Maquina3";
        $machine3->brand = "JVM";
        $machine3->model = "1.8";
        $machine3->description = "Maquina de prova 3";

        $machine3->save();
        */
    }
}
