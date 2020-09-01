<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function registroUser(Request $request)
    {
        $usuario = Usuario::create($request->all());
        return response()->json($usuario, 201);
    }

    public function login(Request $request)
    {
        
        $user = Usuario::where('id', request('id'))->first();
        if ($user != null  ) {
            if($user->password==$request->password){
                echo 'login correcto';
            }
            
        }
        else{
            echo 'Error en las credenciales';
                
            }
            
            
            
        
        //$user= Usuario::where('id', $usuario)->firstOr(function () {
           // echo 'no se encontro';
    //});
        

    }
}
