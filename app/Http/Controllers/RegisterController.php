<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create() {
        return view('public.register');
    }

    public function store(){

        $this->validate(request(), [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
            'id_card'=>'required',
        ]);

        $user = User::create(request(['name', 'last_name', 'id_card', 'email', 'password']));

        auth()->login($user);
        return redirect()->route('public.login');
    }
}
