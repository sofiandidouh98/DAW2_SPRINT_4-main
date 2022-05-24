<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;
use App\Models\Machine;
use App\Models\User;
use App\Models\IncidentState;


class IncidentsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $incident = Incident::select('incidents.id', 'incidents.title', 'incidents.description','machines.name as nameMaquina', 'users.name as nameUser', 'incidents_states.state as estat')
        ->join('machines', 'incidents.id_machine', '=', 'machines.id')
        ->join('users', 'incidents.id_user', '=', 'users.id')
        ->join('incidents_states', 'incidents.id_incident_state', '=', 'incidents_states.id')
        ->paginate();
        return view('incidents.index', compact('incident'));
    }
    public function create(){
        $machines=Machine::all();
        $users=User::all();
        return view('incidents.create', compact("machines","users"));
    }

    public function store(Request $request){
        $incident = new Incident();

        $incident->title = $request->title;
        $incident->id_machine = $request->id_machine;
        $incident->id_user = $request->id_user;
        $incident->id_incident_state = 1;
        $incident->description = $request->description;

        $incident->save();
        return redirect()->route('incidents.index',$incident);
    }

    public function destroy(Request $request)
    {
        $incident = Incident::find($request->id);

        $incident->delete();

        return redirect()->route('incidents.index');
    }

    public function edit(Incident $incident)
    {
        $machines=Machine::all();
        $users=User::all();
        $states=IncidentState::all();

        return view('incidents.edit', compact('incident','machines','users','states'));
    }
    public function update(Request $request, Incident $incident)
    {

        $incident->title = $request->title;
        $incident->id_machine = $request->id_machine;
        $incident->id_user = $request->id_user;
        $incident->id_incident_state = $request->id_incident_state;
        $incident->description = $request->description;

        $incident->save();

        return redirect()->route('incidents.index');
    }
    
        //
    
}
