<?php

$erro_usuario  = isset($_GET['erro_usuario']) ? $_GET['erro_usuario'] : 0;
$erro_email    = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;

?>


<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>RU : Administrador</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<script language="javascript" type="text/javascript">
			
		</script>
	
	</head>

	<body>

		<!-- Início navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/icon_ru.png"/><label for="">RU - Refeitório Universitário UFBA</label>
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="index.php.php">Home</a></li>
	            <li><a href="administrador.php">Dados Pessoais</a></li>
	            <li><a href="sobre.php">Sobre</a></li>
	            <li><a href="faleconosco.php">Fale Conosco</a></li>
	            <li><a href="#">Logoff</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>
	    <!-- Fim navbar -->


	    <div class="container">
	    	<div class="col-md-2"></div>
	    	<div class="col-md-2">
	    		<div class="page-header">
		    		<ul class="nav nav-pills nav-stacked nav-pills-stacked-example"> 
		    			<li role="presentation">
		    				<a href="administrador.php">Administrador</a>
		    			</li> 
		    			<li role="presentation">
		    				<a href="relatorio.php">Relatórios</a>
		    			</li> 
		    			<li role="presentation">
		    				<a href="inscrevase.php">Cadastro</a>
		    			</li>
		    			<li role="presentation">
		    				<a href="ticket.php">Ticket</a>
		    			</li>
		    			<li role="presentation">
		    				<a href="usuario.php">Usuário</a>
		    			</li>
		    		</ul>
	    		</div>

	    	</div>

	    	<div class="col-md-6">
	    		<div class="page-header">
	    			<h3>Administrador</h3>
	    		</div>
	    		<div class="col-md-6">
	    			<p>Data: <label> <?php echo date("d/m/Y") . " " . date("h:i:sa") ."<br />";?></label></p>
	    			<p>nome@exemplo.com.br</p>
	    			<p>CPF: 38956247525</p>
	    			<p>Matricula: 30205643</p>
	    			<br />
	    			<a type="button" class="btn btn-primary" href="index.php">Alterar dados pessoais</a>
	    			<br />
				</div>
				<div class="col-md-6">
	    			<img src="imagens/adm.jpg" class="img-circle img-responsive" alt="Administrador" width="150">
				</div>
				
			</div>
			<div class="col-md-2"></div>
			
			<div class="clearfix"></div>
			<br />
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-6"></div>
			<div class="col-md-2"></div>

		</div>


	    </div>
		<!-- Bootstrap CDN -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>