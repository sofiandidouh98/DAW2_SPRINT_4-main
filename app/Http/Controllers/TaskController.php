<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\TasksState;
use App\Models\Project;
use App\Models\User;
use Symfony\Contracts\Service\Attribute\Required;
use App\Http\Requests\StoreTask;//Form Request

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($project)
    {
        $tasks = Task::all();
        $todo = Task::where(['id_task_state' => 1, 'id_project' => $project])->orderBy('updated_at','DESC')->get();//getting the "to-do" tasks
        $inprogress = Task::where(['id_task_state' => 2, 'id_project' => $project])->orderBy('updated_at','DESC')->get();//getting the "in progress" tasks
        $done = Task::where(['id_task_state' => 3, 'id_project' => $project])->orderBy('updated_at','DESC')->get();//getting the "done" tasks

        /* SELECT `name` FROM `tasks` WHERE `id`='35'
        UNION ALL SELECT `id_user` FROM `tasks_users` WHERE `id_task`='35'; */


        return view("tasks.show_tasks", compact('tasks','todo','inprogress','done','project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($project)
    {
        $projects = Project::all();
        $users = User::all();
        $states = TasksState::all();
        return view("tasks.create_task", compact('states','users','project','projects'));#passing the states of the task
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTask $request, $project)//StoreTask $request
    {

        $task = new Task();
        $task->name = $request->input("taskname");
        $task->description = $request->input("taskdesc");
        $task->created_by = $request->input("taskCreatedBy");
        $task->id_project = $project;#assigning the id project to id_project
        $task->id_task_state = $request->input("taskState");
        $task->start_date = $request->input("startdate");
        $task->end_date = $request->input("enddate");
        $task->estimated_time_in_minutes = $request->input("taskEstimatedTime");
        //$task = Task::all();
        $task->save();
        return redirect()->route('task.show', $task);#redirecting to the task just created
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       /*  $state = Task::where(['id'=>$id])->get('id_task_state');
        $s = $state->id_task_state; */
        
        $state = Task::join('tasks_states','tasks.id_task_state', '=', 'tasks_states.id')
            ->where(['tasks.id'=>$id])
                ->get('tasks_states.state');
        /* $task = Task::where(['id'=>$id])->get(); */
        $project = Task::join('projects','tasks.id_project','=','projects.id')
            ->where(['tasks.id'=>$id])
                ->get('projects.title');
               
        $task = Task::find($id);
        /* $project = $task->id_project; */
        //return $task;
        return view('tasks.show_a_task', compact('task','state', 'project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        $users = User::all();
        $projects = Project::all();
        $states = TasksState::all();
        return view('tasks.edit_task', compact('task','states','projects','users'));#passing the register
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetaskRequest  $request
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $task->name = $request->input("taskname");
        $task->description = $request->input("taskdesc");
        $task->created_by = $request->input("taskCreatedBy");
        $task->id_project = $request->input("taskIDproject");
        $task->id_task_state = $request->input("taskState");
        $task->start_date = $request->input("startdate");
        $task->end_date = $request->input("enddate");
        $task->estimated_time_in_minutes = $request->input("taskEstimatedTime");
        //$task = Task::all();
        $task->save();
        return redirect()->route('task.show', $task);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        
        $project = Task::where(['id' => $task->id])->get('id_project');
        $project = $task->id_project;
        
        $task->delete();
        return redirect()->route('tasks.index',$project);
    }

    /**
     * Change the state of the task
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function changeState(Request $request)
    {
        
        //return response(json_encode($task),200)->header('Content-type','text/plain');

        $task = Task::find($request->id);
        $task->id_task_state = $request->id_task_state;

        $task->save();

    }
}
