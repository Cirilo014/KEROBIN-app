<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KerobinController extends Controller
{

    /* Função que chama a Página inicial do sistema*/

    public function index()
    {
        return view('index');
    }
}
