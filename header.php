<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<div class="header-container">
		<header class="logobox">
			<a href="index.php"><img class="logo center-block img-responsive" src="img/topo_site.png" alt="SACIC Logo"></a>
			
			<div class="topo">
				<div class="topo-linha-1"></div>
				<div class="titulos-topo">
					<h1>VI SACIC</h1>
					<h2>Semana Acadêmica da Ciência da Computação</h2>
				</div>
				<div class="topo-linha-2"></div>
			</div>
			
		</header>
		<div class="nav-wrapper">
			<nav class="navbar navbar-default navbar-affix-top">
				<div class="navbar-header">

					<button onclick="Toggleicon()" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<i id="toggle-icon" class="fa fa-1-5x fa-bars" aria-hidden="true"></i>
					</button>
				</div>

				<div id="navbar" class="navbar-collapse collapse">

					<ul class="nav navbar-nav">

						<li class="navboxes"><a href="index.php"><div class="navlinks">Início</div></a></li>
						<li class="navboxes"><a href="agenda.php"><div class="navlinks">Agenda</div></a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><div class="navlinks">Programação<span class="caret"></span></div></a>
							<ul class="dropdown-menu">
								<li><a class="droplinks" href="palestras.php">Palestras</a></li>
								<li><a class="droplinks" href="minicursos.php">Minicursos</a></li>
								<li><a class="droplinks" href="mesas.php">Mesa Redonda</a></li>
								<li><a class="droplinks" href="desafios.php">Desafios de Programação</a></li>
								<li><a class="droplinks" href="outros.php">Outras Atividades</a></li>

							</ul>
						</li>
						<li class="navboxes"><a href="inscricoes.php"><div class="navlinks">Inscrições</div></a></li>
						<li class="navboxes"><a href="sobre.php"><div class="navlinks">Sobre</div></a></li>
	  	            <!-- <li class="navboxes"><a href="faq.php"><div class="navlinks">Faq</div></a></li>
	  	            <li class="navboxes"><a href="contato.php"><div class="navlinks">Contato</div></a></li> -->
	  	        </ul>

	  	        <ul class="nav navbar-nav navbar-right">

	  	        	<a class="mediaboxes" href="https://www.facebook.com/SACICunifal/" target="_blank"><i class="fa fa-1-5x redesocial-header fa-facebook" aria-hidden="true"></i></a>
	  	        	<a class="mediaboxes" href="https://twitter.com/visacic" target="_blank"><i class="fa fa-1-5x redesocial-header fa-twitter" aria-hidden="true"></i></a>
	  	        	<a class="mediaboxes" href="http://instagram.com/visacic" target="_blank"><i class="fa fa-1-5x redesocial-header fa-instagram" aria-hidden="true"></i></a>
	  	        </ul>
	  	    </nav>
	  	</div>
	  </div>
	  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	  <script type="text/javascript" src="js/header.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>

	</body>
	</html>
