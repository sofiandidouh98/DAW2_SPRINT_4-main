<?php

namespace Database\Seeders;

use App\Models\IncidentState;
use Illuminate\Database\Seeder;

class IncidentStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $state1 = new IncidentState();
        $state1->state = "Obert";

        $state1->save();

        $state2 = new IncidentState();
        $state2->state = "En procés";

        $state2->save();

        $state3 = new IncidentState();
        $state3->state = "Tancat";

        $state3->save();

        $state4 = new IncidentState();
        $state4->state = "Inactiu";

        $state4->save();
        //
    }
}
