<?php

session_start();

$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>RU : Fale Conosco</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		
		<!-- css -->
		<link href="css/estilo.css" rel="stylesheet">

		<!-- favicon -->
		<?php include 'favicon.inc'; ?>

		<script type="text/javascript">
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

				//se o botão foi clicado
				$('#btn_menssagem').click(function(){

					//verificar se ta vazio a caixa de mensagem
					if($('#txt_mensagem').val().length > 0){
						
						$.ajax({

							url: 'incluir_mensagem.php',
							method: 'post',
							data: $('#form_faleconosco').serialize(),

							success: function(data){
								$('#txt_mensagem').val('');
								alert('Mensagem enviada com sucesso');
							}
						});
					}


				});
			});
			//contar os caracteres da mensagem digitada de 255 caracter
			$(document).ready(function(){ 
			    $('#characterLeft').text('255 caracteres restantes');
			    $('#txt_mensagem').keydown(function () {
			        var max = 255;
			        var len = $(this).val().length;
			        if (len >= max) {
			            $('#characterLeft').text('Atingiu o limite');
			            $('#characterLeft').addClass('red');
			            $('#btnSubmit').addClass('disabled');            
			        } 
			        else {
			            var ch = max - len;
			            $('#characterLeft').text(ch + ' caracteres restantes');
			            $('#btnSubmit').removeClass('disabled');
			            $('#characterLeft').removeClass('red');            
			        }
			    });    
			});

			
		</script>
	</head>

	<body>

		<!-- Navegacao -->
		<?php include 'navegacao.inc'; ?>


	    <div class="container capa">
	    	<div class="col-md-1"></div>
	    	<div class="col-md-10">
	    		<br>
		    	<div>
			    	<h2 class="text-left"><strong>Fale Conosco</strong></h2>
			    	<hr>
		    	</div>
		    	<div class="row">
		    		<div class="col-sm-12">
						<h3 class="text-center">Envie-nos uma mensagem</h3>
		    		</div>
		    	</div>
		    	<div class="col-sm-3"></div>
		    	<div class="col-sm-6">
			    	<form method="post" action="#" id="form_faleconosco">
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo" required="required" maxlength="50">
						</div>

						<div class="form-group">
							<label for="email">E-mail</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com.br" required="required" maxlength="50">
						</div>

						<div class="form-group">
							<label for="telefone">Telefone para contato</label>
							<input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(__)_____-____" required="required"><!-- pattern="\([0-9]{2}\) [0-9]{5}-[0-9]{4}$"-->
						</div>
						
						<div class="form-group">
							<label for="motivo">Motivo do contato</label><br />
							    <select class="form-control" id="motivo" name="motivo">
							      <option>-- Selecione uma opção --</option>
							      <option value="1">Alimento</option>
							      <option value="2">Atendimento</option>
							      <option value="3">Limpeza</option>
							      <option value="4">Serviço</option>
							    </select>
						</div>

						<div class="form-group">
							<label for="assunto">Assunto</label><br />
							<input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto" required="required" maxlength="50">
							
						</div>

						<div class="form-group">         
					                <label id="messageLabel" for="txt_mensagem">Mensagem</label>
					                <textarea required="required" class="form-control input-sm " type="textarea" id="txt_mensagem" name="txt_mensagem" placeholder="Escreva sua mensagem" maxlength="255" rows="5"></textarea>
					                    <span class="help-block"><p id="characterLeft" class="help-block ">Atingiu o limite</p></span>
					    </div>

						<div class="col-md-4"></div>
						<div class="col-md-4">
							<button type="submit" class="btn btn-primary form-control" id="btn_menssagem">ENVIAR</button>
						</div>
						
						<div class="col-md-4"></div>

					</form>
				</div>
				<div class="col-sm-3"></div>

			</div>
			<div class="col-md-1"></div>

	    	<div class="clearfix"></div>
			<br />
			<div class="col-md-1"></div>
			<div class="col-md-10"></div>
			<div class="col-md-1"></div>
		</div>
		
		<!--Rodape-->
		<?php include'rodape.inc';?>

		<!-- Bootstrap CDN -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>