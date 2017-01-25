<?php

$erro_usuario  = isset($_GET['erro_usuario']) ? $_GET['erro_usuario'] : 0;
$erro_email    = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;

?>


<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>RU : Cadastrar</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
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
	    			<h3>Cadastrar Conta</h3>
	    		</div>
				<form method="post" action="registra_usuario.php" id="formCadastrarse">
					<div class="form-group">
						<label for="usuario">Nome</label>
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nome do Usuário" required="requiored" maxlength="50">
						<?php

							if($erro_usuario){
								echo'<font style="color:#FF0000">Usuário já cadastrado</font>';
							}
						?>

					</div>

					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com.br" required="requiored" maxlength="50">
						<?php

							if($erro_email){
								echo'<font style="color:#FF0000">E-mail já cadastrado</font>';
							}
						?>

					</div>

					<div class="form-group">
						<label for="cpf">CPF</label>
						<input type="number " class="form-control" id="cpf" name="cpf" placeholder="CPF" required="requiored" maxlength="11">
					</div>

					<div class="form-group">
					  <label for="telefone" class="col-2 col-form-label">Telefone</label>
					  <div class="col-10">
					    <input class="form-control" type="tel" value="(xx)xxxx-xxxx" id="telefone">
					  </div>
					</div>
					
					<div class="form-group">
						<label>Informe o tipo de login:</label><br />
						<div class="radio">
							<label>
								<input type="radio" name="tipo_login" id="matricula">Matrícula
							</label>
							<label>
								<input type="radio" name="tipo_login" id="siape">SIAPE
							</label>
							<label>
								<input type="radio" name="tipo_login" id="codigo">Código
							</label>
						</div>
						<input type="number" class="form-control" id="login" name="login" required="requiored" maxlength="9">
					</div>

					<div class="form-group">
						<label>Tipo de usuário:</label><br />
						<div class="radio">
							<label>
								<input type="radio" name="tipo_usuário" id="bolsista">Bolsista
							</label>
							<label>
								<input type="radio" name="tipo_usuário" id="naobolsista">Não-bolsista
							</label>
							<label>
								<input type="radio" name="tipo_usuário" id="servidor">Servidor
							</label>
							<label>
								<input type="radio" name="tipo_usuário" id="externo">Externo
							</label>
						</div>
					</div>

					<div class="form-group">
					    <label for="arquivo_imagem">Arquivo de imagem</label>
					    <input type="file" class="form-control-file" id="arquivo_imagem" aria-describedby="arquivo_img">
					    <small id="arquivo_img" class="form-text text-muted"></small>
					 </div>

					<div class="form-group">
						<label for="senha">Senha</label>
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored" min="8" max="16">
					</div>

					<div class="form-group">
						<label for="conf_senha">Confirmar Senha</label>
						<input type="password" class="form-control" id="conf_senha" name="conf_senha" placeholder="Confirmar Senha" required="requiored" min="8" max="16">
					</div>
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<button type="submit" class="btn btn-primary form-control">CADASTRAR</button>
					</div>
					<div class="col-md-4"></div>
				</form>
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