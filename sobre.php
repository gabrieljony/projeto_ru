<?php

session_start();

$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>RU : Sobre</title>

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


	    <div class="container capa">
	    	<div class="col-md-1"></div>
	    	<div class="col-md-10 ">
	    		<br>
		    	<div>
			    	<h2 class="text-center"><strong>Bem-vindo ao Refeitório Universitário UFBA</strong></h2>
			    	<hr>
		    	</div>
		    	<div class="row">
		    		<div class="col-sm-4">
						<img src="imagens/refeitorio_2.jpg" alt="Refeitório Universitário" class="img-responsive img-rounded">
					</div>
					<div class="col-sm-8">
						<p class="text-justify">O Restaurante Universitário (RU) da Universidade Federal da Bahia, localizado no Campus de Ondina, visa atender à comunidade acadêmica (alunos, docentes e técnicos administrativos) na oferta de refeições como café da manhã, almoço e jantar a preços acessíveis. No período da manhã, o R.U pode atender até 500 pessoas. Para utilizar o R.U, o aluno precisa apresentar seu Comprovante de Matrícula no caixa do R.U, antes de fazer o pagamento, para gozar do preço popular. O R.U fica disponível durante o período letivo das aulas.</p>
		    		</div>
		    	</div>
		    	<br />
		    	<div class="row">
		    		<div class="col-sm-12">
			    		<p class="lead"><strong>Endereço: Av. Adhemar de Barros, 967 - Ondina, Salvador - BA, 40170-110<br />Horário de funcionamento: 11:00–14:00, 17:00–20:00</strong></p>
			    		<p>
			    			Refeições servidas no RU Ondina<br />
							De segunda a sexta-feira - 1200 almoços e 1000 jantares.<br />
							Sábado: 800 almoços e 400 jantares.<br />
							Domingo e feriados: 300 almoços e 150 jantares.<br />
						</p>
						<br />
						<p>
							Refeições servidas no RU Vitória<br />
							De segunda a sexta-feira - 98 desjejuns, 30 almoços e 160 jantares.<br />
							Finais de semana e feriados: 180 almoços e 130 jantares.<br />
						</p>
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
		

		<!-- Bootstrap CDN -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>