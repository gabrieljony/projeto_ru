<?php

session_start();

$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>RU</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		
		<!-- css -->
		<link href="css/estilo.css" rel="stylesheet">

		<!-- favicon -->
		<?php include 'favicon.inc'; ?>
		
		<script>
			// código javascript - JQuery
			$(document).ready(function(){

				//verificar se os campos de usuários e senha estão preenchidos
				$('#btn_login').click( function(){
					var campo_vazio = false;
					//usuario
					if( $('#campo_usuario').val() == ''){
						$('#campo_usuario').css({'border-color' : '#A94442'});
						campo_vazio = true;
					} else{
						$('#campo_usuario').css({'border-color' : '#ccc'});
					}
					//senha
					if( $('#campo_senha').val() == ''){
						$('#campo_senha').css({'border-color' : '#A94442'});
						campo_vazio = true;
					} else{
						$('#campo_senha').css({'border-color' : '#ccc'});
					}

					if(campo_vazio) return false;
				});
			});				
		</script>
	</head>

	<body>

		<!-- Navegacao -->
		<?php include 'navegacao.inc'; ?>

		<!-- Capa -->
		<div class="container capa">
			<div class="col-md-1"></div>
			<div class="col-xs-12 col-md-10 ">
				<br>
	  			<div class="jumbotron">
				    <img id="refeitorio" src="imagens/refeitorio.jpg" alt="Refeitorio UFBA" class="img-responsive img-rounded center-block" style="width:304px;height:228px;;">
				    <div class="row texto-capa">
						<h1>Refeitório UFBA</h1>
						<p>Controle de acesso/vendas ao refeitório universitário</p>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-1"></div>
			<div class="col-md-10"></div>
			<div class="col-md-1"></div>
		</div>

		<!-- Rodape -->
		<?php include'rodape.inc';?>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    	<!-- Include all compiled plugins (below), or include individual files as needed -->
		<!-- Bootstrap CDN -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>