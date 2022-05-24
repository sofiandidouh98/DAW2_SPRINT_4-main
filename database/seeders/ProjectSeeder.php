<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Project::factory(10)->create();


/*         $project = new Project()
        $project->title = "Projecte Seeder";
        $project->location = "ESPAÑA";
        $project->id_category_proposal_project = "1";
        $project->description = "Descripcio projecte seeder";
        $project->image = 'URLIMAGE';
        $project->id_proposal = 1;
        $project->id_state_proposal_project = 2;
        $project->id_creator = 1;
        
        $project->save(); */
    }

}
