  @extends('Perfis/Utente/Exports/index_utente')
	@section('titulo', 'Bem vindo caro utente!')
	@section('conteudo')

  <div class="row">
    <div class="col-md-6 col-md-offset-4">

      <style>
        .texto{
            display: flex;
            flex-direction:column;
            justify-content: center;
            margin-left:25%;
        }
    </style>

      <div class="row">
      <div class="col-md 4 col md-offset-4">

    <div class="texto col-md-4 mt-2 text-center bg bg-success">
        <h6 >Área do Utente</h6>
        
      </div>
        <hr>

        <div>
             <h1>Esta é a área do Utente!</h1>
        </div>
     
      
    
    
  </div>
  </div>
    

  @endsection
