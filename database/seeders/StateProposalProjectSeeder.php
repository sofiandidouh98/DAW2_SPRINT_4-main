<?php

namespace Database\Seeders;

use App\Models\StateProposalProject;
use Illuminate\Database\Seeder;

class StateProposalProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                //Active Inactive
                $stateProposalProject = new StateProposalProject();

                $stateProposalProject->state = "Active"; 
        
                $stateProposalProject->save();
        
                $stateProposalProject1 = new StateProposalProject();
        
                $stateProposalProject1->state = "Inactive";
                
                $stateProposalProject1->save(); 
    }
}
