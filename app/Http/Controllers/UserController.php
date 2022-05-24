<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\validationUserCreate;
use App\Http\Requests\validationUserPass;
use App\Http\Requests\validationUserUpdate;

class UserController extends Controller
{
    public function index(){

        $users = User::orderBy('id', 'asc')->where('id_user_type', 1)->paginate();

        return view('users.index', compact('users'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(validationUserCreate $request){

        $user = new User();

        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->id_card = $request->id_card;
        $user->id_user_type = 1;

        $user->save();

        return redirect()->route('users.index')->with("alert","afegit l'usuari");
    }

    public function show(User $user){

        return view('users.show', compact('user'));
    }

    public function edit(User $user){
        return view('users.edit', compact('user'));
    }

    public function update(validationUserUpdate $request, User $user)
    {
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        if($request->email != $user->email) {
            $user->email = $request->email;
        }
        $user->id_card = $request->id_card;
        $user->id_user_type = 1;

        $user->save();

        return redirect()->route('users.index')->with("alert","actualitzat informació de l'usuari");
    }

    public function updatePass(validationUserPass $request) {
        $user = User::find($request->id);
        $user->password = $request->password;

        $user->save();

        return redirect()->route('users.index')->with("alert","actualitzat la contrasenya de l'usuari");

    }

    public function destroy(Request $request){

        $user = User::find($request->id);

        $user->delete();

        return redirect()->route('users.index')->with("alert","eliminat l'usuari");
    }

}
