<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pessoal_clinicoController extends Controller
{
    public function create_pessoal_clinico(){
        return view('Perfis.Pessoal_clinico.cadastroPessoalClinico');
    }
   
}
