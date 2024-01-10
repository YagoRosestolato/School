<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function store(Request $request)
    {
        $request->validate([ 
            'name' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
            'lastName' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
            'email'=>["required","email"],
            'password'=>["required",""],
            
        ], [
            'name.required' => 'Campo nome é obrigatório.',
            'name.string' => 'Campo nome deve ser uma string.',
            'name.regex' => 'Campo nome deve conter apenas letras e espaços.',
            
            'lastName.required' => 'Campo sobrenome é obrigatório.',
            'lastName.string' => 'Campo sobrenome deve ser uma string.',
            'lastName.regex' => 'Campo sobrenome deve conter apenas letras e espaços.',
            'email.required' => 'Campo email é obrigatório',
            'email.email' => 'Digite um email válido',
            'password.required' => 'Campo obrigatório'
        ]);

        $credentials = $request->only('email','password');
       
    }

    public function destroy()
    {
        var_dump("logout");
    }
}
