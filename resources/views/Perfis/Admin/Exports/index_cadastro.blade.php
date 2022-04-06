<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('titulo')</title>
	
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="css/cada.css">    
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">    
    <link href="css/fontawesome-all.min.css" rel="stylesheet">    
	<link href="css/minimal-slider.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link href="css/family=Lato:400,700" rel="stylesheet">
    <link href="css/family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('')}}">
</head>
<body>

	<div>
		@yield('conteudo')
	</div>		
		
	

	{{-- Importação do JAVASCRIPT--}}
	<script src='js/jquery.min.js'></script>
	<script src="js/monetization.js" type="text/javascript"></script>
	<script src="js/jquery-2.2.3.min.js"></script>  
	<script src="js/minimal-slider.js"></script>		
    <script src="js/SmoothScroll.min.js"></script>
    <script src="js/bootstrap.js"></script>
    

</body>
</html>