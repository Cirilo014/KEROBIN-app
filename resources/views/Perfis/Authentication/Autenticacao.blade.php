	@extends('Perfis/Authentication/Exports/index')
	@section('titulo', 'Autenticação!')
	@section('conteudo')
		
	

		<form action="{{route('autenticar')}}" method="post">
	
					@csrf				
				
					<div class="row conteudo">
					<div class="col-md-4  col-md-offset-4 caixa-login">

						@if(Session::has('success'))
						<div class="alert alert-success">{{Session::get('success')}}</div>
						@endif
		
						
						@if(Session::has('fail'))
						<div class="alert alert-danger">{{Session::get('fail')}}</div>
						@endif

						<div class="form-group mb-2">
							<label class="form-label" for="">E-mail</label>
							<input placeholder="Digite o seu e-mail:" class="form-control" type="text" name="email" value="{{old('email')}}">
							<span class="text-danger">@error('email') {{$message}} @enderror </span>
							</div>
			
			
							<div class="form-group  mb-2">
							<label class="form-label" for="">Palavra-passe</label>							
							<input placeholder="Digite a palavra-passe:"  class="form-control" type="password" name="senha" value="{{old('senha')}}">
							<span class="text-danger">@error('senha') {{$message}} @enderror </span>
							</div>
							
							{{-- Links--}}

							<div class="form-group mb-1">
								<a href="/create_utente">Ainda não tens uma conta? Clique aqui para a criares</a>
							</div>

							{{-- Botão--}}
							<div class="form-group mb-2">
								<button class="btn btn-primary ">Entrar</button>
							
							</div>						
							</div>
							</div>

							</form>

	@endsection	
				


				{{--
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIS-Login</title>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body class="login_fundo">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{route('acessar')}}">
					 @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif

                
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                
                @endif
                    
					@csrf
                    <span class="login100-form-title p-b-48">
						<i class="fa fa-heartbeat"></i>
					</span>
					<p  class="login100-form-title p-b-20" href="#" >CLÍNICA AURORA CARE</p>

					

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="nome">
						<span class="focus-input100" data-placeholder="Nome de Utilizador"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="senha">
						<span class="focus-input100" data-placeholder="Senha"></span>
					</div>

					<div >
						<div >
							<div ></div>
							<button class="btn btn-outline-primary" type="submit" name="botao">
								Entrar
							</button>
						</div>
					</div>

					<div id="inscrever">
					<div class="text-center p-t-115">
						<span class="txt1">
							Não está cadastrado?
						</span>

						<a id="des" class="txt2" href="/salvar">
						Cadastre-se
						<i id="entrar" class="fa fa-arrow-circle-right" style="color:blue;" aria-hidden="true"></i>
							
						</a>
					</div>
					<div class="text-center p-t-20">
					<a  class="txt2" href="/">
					
					<i id="entrar" class="fa fa-arrow-circle-left" style="color:blue;" aria-hidden="true"></i>
					Voltar para Página I  nicial	
						</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>

</body>

</html>
--}}


