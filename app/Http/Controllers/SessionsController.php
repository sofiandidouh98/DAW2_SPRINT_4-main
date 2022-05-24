<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Auth;


class SessionsController extends Controller
{
    public function create() {
        return view('public.login');
    }

    public function store() {
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El correu o la contrasenya son incorrectes, torneu-ho a provar.',
            ]);
        }
        return redirect()->route('users.index');
    }

    public function destroy(){
        auth()->logout();
        Session()->flush();

        return redirect()->route('public.index');
    }
}
