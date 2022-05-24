<?php

namespace App\Http\Controllers;

use App\Http\Requests\validationResource;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ResourceController extends Controller
{
    public function index(){
        
        $resources= Resource::paginate();

        return view('resources.index', compact('resources'));
    }

    public function create(){
        return view('resources.create');
    }

    public function edit(Resource $resource){
        return view('resources.edit', compact('resource'));
    }

    public function store(Request $request){

        $resource = new Resource();

        $resource->name = $request->input("resourcename");
        $resource->description = $request->input("resourcedesc");
        $resource->provided_by = $request->input("resourceCreatedBy");
        $resource->id_project = $request->input("resourceIDproject");

        $resource->save();

        return redirect()->route('resources.index');
    }

    public function update(Request $request, Resource $resource)
    {
        $resource->name = $request->input("resourcename");
        $resource->description = $request->input("resourcedesc");
        $resource->provided_by = $request->input("resourceCreatedBy");
        $resource->id_project = $request->input("resourceIDproject");

        $resource->save();
        return redirect()->route('resources.index');

    }

    public function destroy(Request $request)
    {

        $resource = Resource::find($request->id);

        $resource->delete();

        return redirect()->route('resources.index');
    }

}
