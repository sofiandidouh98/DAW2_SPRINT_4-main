<?php

namespace Database\Seeders;

use App\Models\TasksState;
use Illuminate\Database\Seeder;

class TasksStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TasksState::factory(5)->create();
        

        /* $TaskState = new TaskState();

        $TaskState->id = 1;
        $TaskState->state = "To-do";


        $TaskState = new TaskState();

        $TaskState->id = 2;
        $TaskState->state = "In progress";


        $TaskState = new TaskState();

        $TaskState->id = 3;
        $TaskState->state = "Done"; */
    }
}
