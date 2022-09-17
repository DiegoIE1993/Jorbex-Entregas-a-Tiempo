<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
		<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #131f34;">

	 		<div class="container-fluid">
			    <a class="navbar-brand" href="#">
			    	<img src="{{ asset('img/jorbex.ico') }}" alt="Logo" width="50px">
			    </a>

			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="#">INICIO</a>
			        </li>
			        <li class="nav-item dropdown">
			          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			            SERVICIOS ONLINE
			          </a>
			          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			            <li><a class="dropdown-item" href="#">RASTREAR ENVIÓ</a></li>
			            <li><a class="dropdown-item" href="{{route('admin.recogidas.create')}}">SOLICITAR RECOGIDA</a></li>
			            <li><a class="dropdown-item" href="#">CONSULTA DE RECOGIDA</a></li>
			            <li><a class="dropdown-item" href="#">COTIZAR ENVIÓ</a></li>
			          </ul>
			        </li>
			        <a class="nav-link active" aria-current="page" href="#">CONTÁCTENOS</a>
			        <a class="nav-link active" aria-current="page" href="{{route('login')}}">ACCEDER</a>
			      </ul>
			    </div>
	  		</div>

	</nav>

	@yield('contenido')

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>