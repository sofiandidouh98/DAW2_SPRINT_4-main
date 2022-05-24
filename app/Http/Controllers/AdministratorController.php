<?php

namespace App\Http\Controllers;

use App\Http\Requests\validationAdministratorCreate;
use App\Http\Requests\validationAdministratorUpdate;
use App\Http\Requests\validationAdministratorPass;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdministratorController extends Controller
{
    public function index(){

        $administrators = User::orderBy('id', 'asc')->where('id_user_type', 2)->paginate();

        return view('administrators.index', compact('administrators'));
    }

    public function create(){
        return view('administrators.create');
    }

    public function store(validationAdministratorCreate $request){

        $administrator = new User();

        $administrator->name = $request->name;
        $administrator->last_name = $request->last_name;
        $administrator->email = $request->email;
        $administrator->password = $request->password;
        $administrator->id_card = $request->id_card;
        $administrator->id_user_type = "2";

        $administrator->save();

        return redirect()->route('administrators.index')->with("alert","afegit l'administrador");
    }

    public function edit(User $administrator){
        return view('administrators.edit', compact('administrator'));
    }

    public function update(validationAdministratorUpdate $request, User $administrator)
    {

        $administrator->name = $request->name;
        $administrator->last_name = $request->last_name;
        
        if($request->email != $administrator->email) {
            $administrator->email = $request->email;
        }

        $administrator->id_card = $request->id_card;
        $administrator->id_user_type = 2;

        $administrator->save();

        return redirect()->route('administrators.index')->with("alert","actualitzat informació de l'administrador");
    }

    public function updatePass(validationAdministratorPass $request) {
        $administrator = User::find($request->id);
        $administrator->password = $request->password;

        $administrator->save();

        return redirect()->route('administrators.index')->with("alert","actualitzat la contrasenya de l'administrador");
    }

    public function destroy(Request $request){

        $administrator = User::find($request->id);

        $administrator->delete();

        return redirect()->route('administrators.index')->with("alert","eliminat l'administrador");
    }
}
