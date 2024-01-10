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
            'email'=>["required","email"],
            'password'=>["required",""],
            
        ], [
            'email.required' => 'Campo obrigatório',
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
