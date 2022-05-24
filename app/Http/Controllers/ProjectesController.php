<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\Project;
use App\Models\Category;


class ProjectesController extends Controller
{



    public function listProjectsAdmin(){
        return view("projects.show_projectsAdmin");
    }
    
    public function createProjectsAdmin(){
        $categories = Category::all();
        return view("projects.create_projectAdmin", compact('categories'));
    }
    public function validateProjectsAdmin(Request $request){
        $request->validate([
            'projectname' => 'required|max:15|min:3',
            'location' => 'required|max:15|min:3',
            'category'=> 'required',
            'description' => 'required|min:3'
        ]);

        $project = new Project();

        $project->title = $request->projectname;
        $project->location = $request->location;
        $project->id_category_proposal_project = $request->category;
        $project->description = $request->description;
        $project->image = 'URLIMAGE';
        $project->id_proposal = 2;
        $project->id_state_proposal_project = 2;
        $project->id_creator = 1;
        

        $project->save();
        $projects = \DB::table('projects')->select('id', 'title', 'id_category_proposal_project', 'location', 'description', 'created_at')->get();
        return view("projects.show_projectsAdmin",compact('projects'));


    }

 public function showProjectAdmin($id)
 {
    $project = Project::find($id);

    return view('projects.show_a_project', compact('project'));
 }
 
 public function editProjectAdmin(Project $id){
    
 return view('projects.edit_projectAdmin',compact('id'));
 }

  public function saveEditProjectAdmin(Request $request,Project $project){
      
    $project->title = $request->projectname;
    $project->location = $request->location;
    $project->id_category_proposal_project = "1";
    $project->description = $request->description;
    $project->image = 'URLIMAGE';
    $project->id_proposal = 2;
    $project->id_state_proposal_project = 2;
    $project->id_creator = 1;
    
    $project->save();
    return redirect()->route('indexAdmin.list');

 } 

    public function index(){
        $projects = Project::all();
        return view("projects.show_projectsAdmin", compact('projects')); 

    } 
    public function destroyProjectAdmin(project $id){
        
        $id->delete();
        return redirect()->route('indexAdmin.list');

    }
}