<?php

namespace App\Http\Controllers;
use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
      public function index()
    {
        return Cliente::all();
    }
    public function show(Cliente $cliente)
    {
        return $cliente;
    }

}
