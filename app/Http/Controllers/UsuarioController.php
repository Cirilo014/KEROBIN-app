<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Hash;
use Session;

class UsuarioController extends Controller
{
    
    
    /* [MÉTODO PARA CHAMAR A VIEW DE CADASTRO DOS UTENTES] */
    

    /* [MÉTODO PARA INSERÇÃO DE UTENTES NO BANCO DE DADOS]*/
    public function cadastros(Request $request){

        
        //Validação para campos obrigatórios ou Vazios
            $request->validate([
            
            'nome' => 'required',
            'email' => 'required|email|unique:usuarios',
            'senha' => 'required',
            'confirmar_senha' => 'required|same:senha',
            
        ],[            
            'nome.required' => 'Preencha o seu nome',
            'email.unique' => 'Este e-mail já existe',
            'email.required' => 'Preencha o email*',
            'senha.required' => 'Preencha a senha*',
            'confirmar_senha.same' => 'As senhas não correspondem',
            'confirmar_senha.required' => 'Confirme a senha',


            
        ]);

            // VERIFICAR SE JÁ EXISTE UM DETERMINADO E-MAIL NA DB
          
            /*
            $utente = Usuario::where('email', '=', $request->email);
                if($utente->count() != 0){

                return back()->with('success', 'Este e-mail já existe tente outro!');
                   
        }
        */


        //Verificar se já existe o e-mail no DB
        $email = Usuario::where('email', '=', $request->email)->first();
        
    



        //Cadastro de UTENTES no sistema         
         $utente = new Usuario();
         $utente->nome = $request->nome;
         $utente->email = $request->email;
         $utente->perfil = $request->perfil;
         $utente->senha = Hash::make($request->senha);
         
         $result = $utente->save();
 
            if($result){
             //return redirect('autenticacao');
                return back()->with('success', 'Utilizador registado com sucesso!');
            }else{
                return back()->with('fail', 'Erro ao cadastrar,tente novamente!');
                        
            }


        
             
      
  }
 
        }
  
        


    





