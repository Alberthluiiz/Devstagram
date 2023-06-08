<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        /*
        //Mensaje de prueba
        dd("Post.."); 
        */

        /*
        //Muestra toda la informacion
        dd($request); 
        */

        /* 
        //Ver informacion de un campo en especifico
        dd($request->get('user'));
        dd($request->get('username'));
        dd($request->get('email'));
        dd($request->get('password'));
        dd($request->get('password_confirmation')); 
        */

        // Valicacion 
        $this->validate($request, [
            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required',
        ]);
    }
}
