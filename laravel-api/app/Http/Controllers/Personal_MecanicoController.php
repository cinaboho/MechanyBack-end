<?php

namespace App\Http\Controllers;
use App\Personal_Mecanico;
use Illuminate\Http\Request;

class Personal_MecanicoController extends Controller
{
    //
    
    public function buscarId(Personal_Mecanico $personal_mecanico)
    {
            return $personal_mecanico;

    }

}
