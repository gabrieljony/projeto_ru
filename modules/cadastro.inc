<?php

$erro_usuario  = isset($_GET['erro_usuario']) ? $_GET['erro_usuario'] : 0;
$erro_email    = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;

?>

<div class="col-md-12">
	<div class="page-header">
		<h3>Cadastrar Conta</h3>
	</div>
	<div class="col-md-12">
		<p>Data: <label> <?php echo date("d/m/Y") . " " . date("h:i:sa") ."<br />";?></label></p>
		<br/>
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
</div>