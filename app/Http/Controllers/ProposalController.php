<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Proposal;
use App\Models\StateProposalProject;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProposal;

class ProposalController extends Controller
{   
    /**
     * Display a listing of the proposals from the user space.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $proposals = Proposal::select('proposals.id', 'proposals.title', 'proposals.location', 'proposals.created_at', 'proposals.description', 'categories_proposals_projects.category')
            ->join('categories_proposals_projects', 'proposals.id_category_proposal_project', '=', 'categories_proposals_projects.id')
            ->where(['proposals.id_state_proposal_project' => 1])
            ->paginate();


        return view('proposals.user.index', compact('proposals'));
    }

    /**
     * Display a listing of the proposals from the admin space.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin()
    {

        $proposals = Proposal::select('proposals.id', 'proposals.title', 'proposals.location', 'proposals.created_at', 'proposals.description', 'categories_proposals_projects.category')
            ->join('categories_proposals_projects', 'proposals.id_category_proposal_project', '=', 'categories_proposals_projects.id')
            ->paginate();


        return view('proposals.admin.index', compact('proposals'));
    }

    /**
     * Show the form for creating a new proposal from the user space.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::all();

        return view('proposals.user.create', compact('categories'));
    }

    /**
     * Show the form for creating a new proposal from the admin space.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAdmin()
    {
        $categories= Category::all();

        $users = User::all();

        $states = StateProposalProject::all();

        return view('proposals.admin.create', compact('categories', 'users', 'states'));
    }

    /**
     * Store a newly created proposal in storage from the admin space.
     *
     * @param  \App\Http\Requests\StoreProposal  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAdmin(StoreProposal $request)
    {

        $proposal = new Proposal();

        $proposal->title = $request->title;
        $proposal->location = $request->location;
        $proposal->description = $request->description;
        if($request->image == null){
            $proposal->image = 'https://via.placeholder.com/640x480.png/006633?text=aspernatur';
        }
        else{
            $proposal->image = $request->image; 
        }
        $proposal->id_category_proposal_project = $request->category;
        $proposal->id_state_proposal_project = $request->state;
        $proposal->id_creator = $request->creator;

        $proposal->save();

        return redirect()->route('proposals.showAdmin', $proposal);
    }

     /**
     * Store a newly created proposal in storage from the user space.
     *
     * @param  \App\Http\Requests\StoreProposal  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProposal  $request)
    {

        $proposal = new Proposal();

        $proposal->title = $request->title;
        $proposal->location = $request->location;
        $proposal->description = $request->description;
        if($request->image == null){
            $proposal->image = 'https://via.placeholder.com/640x480.png/006633?text=aspernatur';
        }
        else{
            $proposal->image = $request->image; 
        }
        $proposal->id_category_proposal_project = $request->category;
        $proposal->id_state_proposal_project = 1;
        $proposal->id_creator = 1;

        $proposal->save();

        return redirect()->route('proposals.show', $proposal);
    }

    /**
     * Display the specified proposal from the user space.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function show(Proposal $proposal)
    {

        $proposal = Proposal::select('proposals.id', 'proposals.title', 'proposals.location', 'proposals.created_at', 'proposals.description', 'categories_proposals_projects.category')
        ->join('categories_proposals_projects', 'proposals.id_category_proposal_project', '=', 'categories_proposals_projects.id')
        ->where(['proposals.id' => $proposal->id])
        ->get();
        
        $proposal = $proposal[0];

        return view('proposals.user.show', compact('proposal'));
    }

    /**
     * Display the specified proposal from the admin space.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function showAdmin(Proposal $proposal)
    {

        $proposal = Proposal::select('proposals.id', 'proposals.title', 'proposals.location', 'proposals.created_at', 'proposals.description', 'categories_proposals_projects.category')
        ->join('categories_proposals_projects', 'proposals.id_category_proposal_project', '=', 'categories_proposals_projects.id')
        ->where(['proposals.id' => $proposal->id])
        ->get();
        
        $proposal = $proposal[0];

        return view('proposals.admin.show', compact('proposal'));
    }

    /**
     * Show the form for editing the specified proposal from the admin space.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function editAdmin(Proposal $proposal)
    {
        $categories= Category::all();

        $users = User::all();

        $states = StateProposalProject::all();

        return view('proposals.admin.edit', compact('proposal', 'categories', 'users', 'states'));
    }

    /**
     * Show the form for editing the specified proposal from the user space.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function edit(Proposal $proposal)
    {
        $categories= Category::all();

        return view('proposals.user.edit', compact('proposal', 'categories'));
    }

    /**
     * Update the specified proposal in storage from the user space.
     *
     * @param  \App\Http\Requests\StoreProposal  $request
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProposal  $request, Proposal $proposal)
    {

        $proposal->title = $request->title;
        $proposal->location = $request->location;
        $proposal->description = $request->description;
        if($request->image!= null){
            $proposal->image = $request->image;
        }
        $proposal->id_category_proposal_project = $request->category;

        $proposal->save();

        return redirect()->route('proposals.show', compact('proposal'));
    }

    /**
     * Update the specified proposal in storage from the admin space.
     *
     * @param  \App\Http\Requests\StoreProposal  $request
     * @param  \App\Models\Proposal  $proposal
     * @return \Illuminate\Http\Response
     */
    public function updateAdmin(StoreProposal  $request, Proposal $proposal)
    {

        $proposal->title = $request->title;
        $proposal->location = $request->location;
        $proposal->description = $request->description;
        if($request->image!= null){
            $proposal->image = $request->image;
        }
        $proposal->id_category_proposal_project = $request->category;
        $proposal->id_state_proposal_project = $request->state;
        $proposal->id_creator = $request->creator;

        $proposal->save();

        return redirect()->route('proposals.showAdmin', compact('proposal'));
    }

    /**
     * Remove the specified proposal from storage.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $proposal = Proposal::find($request->id);

        $proposal->delete();

        return redirect()->route('proposals.indexAdmin');
    }

    /**
     * Pass a proposal to a project
     * 
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function toProject(Request $request){

        $proposal = Proposal::find($request->id);

        $project = new Project();

        $project->id_proposal = $proposal->id;
        $project->title = $proposal->title;
        $project->location = $proposal->location;
        $project->description = $proposal->description;
        $project->image = $proposal->image;
        $project->id_category_proposal_project = $proposal->id_category_proposal_project;
        $project->id_state_proposal_project = $proposal->id_state_proposal_project;
        $project->id_creator =$proposal->id_creator;

        $proposal->id_state_proposal_project = 2;

        $proposal->save();
        $project->save();

        return view('projects.show_a_project', compact('project'));
    }
}
