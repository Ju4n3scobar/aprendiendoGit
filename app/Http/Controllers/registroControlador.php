<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registroControlador extends Controller
{
    public function inicioSession (Request $request){
        $userName = $request -> userName;
        $password = $request -> password;
        if($userName == 'Juan' and $password == '123'){
            return view('bienvenido',['userName' => $userName]);
        } else {
            echo "Datos incorrectos";
            return view('formulario');
        }

    }
}
