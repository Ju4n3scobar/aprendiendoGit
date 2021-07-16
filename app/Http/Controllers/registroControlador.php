<?php

namespace App\Http\Controllers;

use App\Models\insertUser;
use Illuminate\Http\Request;

class registroControlador extends Controller
{
    public function registroUser (Request $request){
        $userName = $request -> userName;
        $password = $request -> password;
        $password = md5($password);
        if($userName and $password){
            $usuario = new insertUser();

            $usuario->userName = $userName;
            $usuario->password = $password;
            
            $usuario->save();

            return view('inicioSession');
        } else {
            echo "Datos incorrectos";
            return view('formulario');
        }

    }

    public function inicioSession (Request $request){
        $userName = $request->userName;
        $password = md5($request->password);

        
        
        if($usuario1 = insertUser::where('userName', $userName)->first()){
            if($usuario1->userName === $userName and $usuario1->password === $password){
                return view('bienvenido',['userName' => $usuario1->userName]);
            } else {
                echo "Datos incorrectos";
                return view('inicioSession');
            }
        } else {
            echo "Datos incorrectos";
            return view('inicioSession');
        }

    }
}
