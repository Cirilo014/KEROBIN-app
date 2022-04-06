    @extends('Perfis/Admin/Exports/index_cadastro')
    @section('titulo', 'Cadastrar Administrador!')
    @section('conteudo')

        
	<section class="departments">
		<div class="departments-1 py-lg-5">
			<div class="container py-5">
				<div class="text-center wthree-title pb-sm-5 pb-3">
					<h3 class="w3l-sub text-white">Registo para Administradores</h4>
					<h4 class="sub-title py-3 text-white">Faça o seu registro e desfrute dos nossos serviços.</h5>
                    </div>
					<div class="row py-lg-5">
						
						<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1></h1>
			</div>			
			
			<div class="col-sm-8 control-label">

            
			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
				

				<li role="presentation"><a href="#dados_de_acesso" aria-controls="dados_de_acesso" role="tab" data-toggle="tab" id="dacc">Dados de Acesso</a></li>
				
			  </ul>
             

			  <!-- Tab panes -->
			  <div class="tab-content">
				
						<form class="form-horizontal" method="post" action="/cadastro">
                         @csrf
                            {{-- Apresentação de msg de sucesso caso cadastrar--}}
                
                @if(Session::has('success'))
                <div class="alert alert-warning">{{Session::get('success')}}</div>
                @endif

                {{-- Apresentação de mensagem caso haja falhas--}}
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                
                
				<div role="tabpanel" class="tab-pane" id="dados_de_acesso">
					<div style="padding-top:20px;">
					 

                        <div class="form-group">
                            <label  for="nome" class="col-sm-2 control-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  name="nome" id="nome" value="{{old('nome')}}">
                                <span class="text-danger">@error('nome') {{$message}} @enderror</span>

                            </div>
                        </div> 

                            
                           
                            <div class="form-group">
                                <label  for="Utilizador" class="col-sm-2 control-label">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control"  name="email" id="Utilizador" value="{{old('email')}}">
                                    <span class="text-danger">@error('email') {{$message}} @enderror </span>

                                </div>
                            </div>              
                            

                            
                                {{-- Senha: --}}
                            
                                <div class="row align-items-center">
                                <div class="col-md-6 mb-6 align-items-center">
                                    <label for="senha" class="col-sm-4 control-label">Senha:</label>
                                    <div class="col-sm-8">
                                  <input type="password" class="form-control" name="senha" id="senha" value="{{old('senha')}}">
                                  <span class="text-danger">@error('senha') {{$message}} @enderror </span>

                                  </div>

                                {{-- Confirmar Senha: --}}

                                  <div class="row align-items-center">
                                    <div class="col-md-6 mb-6 align-items-center">
                                        <label for="senha" class="col-sm-4 control-label">Confirmar Senha:</label>
                                        <div class="col-sm-8">
                                      <input type="password" class="form-control" name="confirmar_senha" id="senha" value="{{old('confirmar_senha')}}">
                                      <span class="text-danger">@error('confirmar_senha') {{$message}} @enderror </span>
    
                                      </div>

                                  

                              
                               
                                  <div class="row align-items-center" style=" visibility: hidden;">
                                    <div class="col-md-4  align-items-center">
                                        <label class="col-sm-2 control-label" for="exampleFormControlSelect1">Perfil</label>
                                        <div class="col-sm-8">
                                        <select class="form-control"  name="perfil" id="exampleFormControlSelect1">
                                          <option>Administrador</option>                                        
                                          
                                        </select>
                                        </div>
                                      </div>
                                  </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    
                                    <button type="submit"  name="submit" class="btn btn-primary btn-lg active">Salvar Dados</button>
                                    <div class="text-center p-t-20">

					                
						</div>
                                    
                                </div>
                            </div>
                        </form>
					</div>
				</div>		
		
					</div>
			</div>
		</div>
        </section>

@endsection