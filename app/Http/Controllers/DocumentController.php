<?php

namespace App\Http\Controllers;

use App\Models\DocumentsType;
use App\Models\User;
use App\Models\Project;
use App\Models\Document;
use Illuminate\Http\Request;
use App\Http\Requests\ValidationDocument;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;


class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::orderBy('id', 'desc')->paginate();
        $users = User::select('id','name')->get();
        $projects = Project::select('id','title')->get();

//        dd(asset("/storage/".$documents[0]->name));
//        dd(Storage::url($documents[0]->name));

        return view('documents.index', compact('documents','users','projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::select('id','name')->get();
        $projects = Project::select('id','title')->get();
        $types = DocumentsType::select('id','name')->get();

        return view('documents.create', compact('users','projects', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationDocument $request)
    {
        $document = new Document();

        $document->name = $request->file("file")->hashName();
        $document->id_document_type = $request->id_document_type;
        $document->id_project = $request->id_project;
        $document->id_user = $request->id_user;

        $document->save();

        Storage::disk('public')->put($document->name, file_get_contents($request->file("file")));

        return redirect()->route('documents.show', $document);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        return view('documents.show', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Document $document)
    {
        $users = User::select('id','name')->get();
        $projects = Project::select('id','title')->get();
        $types = DocumentsType::select('id','name')->get();

        return view('documents.edit', compact('document', 'users','projects', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidationDocument $request, Document $document)
    {
        $document->name = $request->file("file")->hashName();
        $document->id_document_type = $request->id_document_type;
        $document->id_project = $request->id_project;
        $document->id_user = $request->id_user;

        $document->save();

        Storage::disk('public')->put($document->name, file_get_contents($request->file("file")));

        return redirect()->route('documents.show', $document);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $document = Document::find($request->id);

        $document->delete();

        return redirect()->route('documents.index');
    }
}
