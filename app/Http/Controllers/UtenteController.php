<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtenteController extends Controller
{
    
    //Exibir a View de cadastro de Utentes
        public function create_utente(){
            return view('Perfis.Utente.cadastroUtente');
        }

        
}
