<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Hash;
use Session;


class AutenticacaoController extends Controller {

        //Trazer a View para Autenticão
        public function autenticacao(){

            return view('Perfis.Authentication.Autenticacao');
                
            }

        public function autenticar(Request $request){
        
            //Validação para campos obrigatórios
            $request->validate([
            'email' => 'required|email',
            'senha' => 'required'
            
            ],[

            'email.email' => 'Insira um e-mail válido *',
            'email.required' => 'Preencha o e-mail *',
            'senha.required' => 'Preencha a senha *'
            
            ]);   

            /* Verificar se os Dados do banco de dados e o introduzido nos
             Inputs são os mesmos que vêm dos Inputs*/
            
             $usuario = Usuario::where('email', '=', $request->email)->first();
                 
             if($usuario){  
              
             if(Hash::check($request->senha, $usuario->senha)){
                  $request->session()->put('loginId',$usuario->id_usuario);
                  
             }else{
              return back()->with('fail', 'A palavra passe está errada!');
             }
                        
              
             }else{
  
              return back()->with('fail', 'Este e-mail não existe!');
              
              }
  
  
              /* Verificando o nivel de Acesso ao sistema */
              if($usuario->perfil  === 'Administrador'){
              return redirect('administrador');          
  
              } else if($usuario->perfil === 'Pessoal_clinico'){
                  return redirect('pessoal_clinico');
  
              }else if($usuario->perfil === 'Utente'){
                  return redirect('utente');
  
          } 
          
          
          
   
            }

        //Acessar a área do ADMINISTRADOR
        public function show_administrador(){
        return view('Perfis.Admin.areaAdministrativa');

        }

   
          //Acessar a área do UTENTE
        public function  show_utente(){
            return view('Perfis.Utente.areaUtente');
        }  

         //Acessar a área do PESSOAL CLÍNICO
        public function show_pessoal_clinico(){
        return view('Perfis.Pessoal_clinico.areaPessoal_clinico');

    }

    
    

    public function cadastrar(){
        return view('cadastro');
    }

    
}
