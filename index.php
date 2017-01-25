<?php

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
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra_navegacao" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Alternar Navegação</span><!--leitores de tela-->
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/icon_ru.png"/><label for="">RU - Refeitório Universitário UFBA</label>
	        </div>
	        
	        <div id="barra_navegacao" class="navbar-collapse collapse ">
	          <ul class="nav navbar-nav navbar-right">
	          	<li><a href="index.php">Home</a></li>
	          	<li><a href="sobre.php">Sobre</a></li>
	          	<li><a href="faleconosco.php">Fale Conosco</a></li>
	          	<li class="divisor hidden-xs" role="separator"></li>
	            <li class="<?= $erro == 1 ? 'open' : '' ?>">
	            	<a id="entrar" data-target="#" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login<span class="caret"></span></a>
					<!-- o item para o acesso -->
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

	      <!-- Main component for a primary marketing message or call to action -->
	      <div class="capa">
		      <div class="jumbotron texto-capa">
		      	<img src="imagens/refeitorio.jpg" alt="Refeitorio UFBA" style="width:304px;height:228px;" class="img-responsive img-rounded center-block">
		        <h1>Refeitório UFBA</h1>
		        <p>Controle de acesso/vendas ao refeitório universitário</p>
		      </div>
		  </div>

	      <div class="clearfix"></div>
		</div>


	    </div>
		<!-- Bootstrap CDN -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>