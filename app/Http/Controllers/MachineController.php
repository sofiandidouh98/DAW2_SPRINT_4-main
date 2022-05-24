<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function index() {
        $machines = Machine::orderBy('id', 'desc')->paginate();
        //return $machines;

        return view('machines.index', compact('machines'));
    }

    public function create() {
        return view('machines.create');
    }

    public function store(Request $request) {
        $machine = new Machine;

        $machine->name = $request->name;
        $machine->brand = $request->brand;
        $machine->model = $request->model;
        $machine->description = $request->description;

        $machine->save();

        return redirect()->route('machines.index', $machine->id);
    }

    public function show(Machine $machine) {
        return view('machines.show', compact('machine'));
    }

    public function edit(Machine $machine) {
        return view('machines.edit', compact('machine'));
    }

    public function update(Request $request, Machine $machine) {
        $machine->name = $request->name;
        $machine->brand = $request->brand;
        $machine->model = $request->model;
        $machine->description = $request->description;

        $machine->save();

        return redirect()->route('machines.index', $machine);
    }

    public function destroy(Request $request)
    {
        $machine = Machine::find($request->id);

        $machine->delete();

        return redirect()->route('machines.index');
    }
}
