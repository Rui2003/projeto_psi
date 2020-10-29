<!DOCTYPE html>
<html>
@yield('boot')
<head>
	<meta charset="utf-8">
	<meta content="width=device-with, initial-scale=-1, shrink-to-fit-no"name=viewport">

	<title>Exemplo de Bootstrap</title>
	<link href="{{('css/Bootstrap.min.css')}}"rel="stylesheet">
	<link href="{{('estilos.css')}}"rel="stylesheet">
	
</head>
<body>
	@yield('nav')
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-togger-icon"></span>
</button>


<div class="collapse-navbar-collapse" id="navbarsExampleDefault">
	<ul class="navbar-nav mr-auto">
		<li class="navbar-nav mr-auto">
			<a class="nav-link" href="#">Home <span class="sr-only">(atual)</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="noticias">Noticias</a>
		</li>
		<li class="nav-item">
			<a class="nav-link disable" href="empresa"> Empresa </a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link nav-item-dropdown-toggle" href="ondeestamos" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Onde Estamos</a>
			<div class="dropdown-menu" aria-labelledby="dropdown01">
				<a class="dropdown-item" href="#">Item</a>
				<a class="dropdown-item" href="#">Outro item</a>
				<a class="dropdown-item" href="#">Algum outro item</a>
			</div>
		</li>
	</ul>
</div>
</nav>



<footer  class="container">
	<p>&copy; Companhia GPSI 2020-2021</p>
</footer>
<script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>





	</div>







	</div>

		





	






</div>
</body>
</html>