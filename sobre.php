<?php

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
		<link href="estilo.css" rel="stylesheet">

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

		<!-- Static navbar -->
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
	          	<li><a href="index.php">Home</a></li>
	          	<li><a href="sobre.php">Sobre</a></li>
	          	<li><a href="faleconosco.php">Fale Conosco</a></li>
	          	<li class="divisor" role="separator"></li>
	            <li class="<?= $erro == 1 ? 'open' : '' ?>">
	            	<a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login</a>
					<ul class="dropdown-menu" aria-labelledby="login" role="menu">
						<div class="col-md-12">
				    		<h5>Acesso</h5>
				    		<?php
								if($erro == 1){
									echo "<font color='#FF0000'>Usuário ou senha inválido(s)</font>";
								}
							?>
							<form method="post" action="validar_acesso.php" id="formLogin">
								<div class="form-group">
									<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Matrícula, SIAPE ou Código" />
								</div>
								
								<div class="form-group">
									<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
								</div>
								
								<button type="buttom" class="btn btn-primary" id="btn_login">Logar</button>

								<div class="etc-login-form">
									<h6><a href="#">Esqueceu a senha?</a></h6>
								</div>
								<br />
							</form>
						</div>
				  	</ul>
	            </li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">
	    	<div class="col-md-1"></div>
	    	<div class="col-md-10 page-header">
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