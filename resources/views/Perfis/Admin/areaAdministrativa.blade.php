        @extends('Perfis/Admin/Exports/index')
        @section('titulo', 'Seja bem-vindo Admin!')
        @section('conteudo')

            <div class="row">
            <div class="col-md 4 col md-offset-4">

                <style>
                    .texto{
                        display: flex;
                        flex-direction:column;
                        justify-content: center;
                        margin-left:25%;
                    }
                </style>

                <div class="texto col-md-4 mt-3 text-center alert alert-danger">
                    <h6 class="text-center mt-3">Área do Administrador</h6>
                </div>
                

                <div class="mt-5">
                    <h4>Cadastre um Administrador!</h4>
                    <a href="/create_admin">Clique aqui para cadastrar o admin</a>
                    <hr>
                </div>


                <div class="">
                    <h4>Cadastre o Pessoal clínico!</h4>
                    <a href="/create_pessoal_clinico">Clique aqui para cadastrar os funcionários</a>
                    <hr>
                </div>

                <div class="mt-5">
                    <h4>Gerencie os dados Utentes!</h4>
                    <a href="">Clique aqui para gerir os utentes</a>
                    <hr>
                </div>
                
            </div>
        </div>
  

 @endsection