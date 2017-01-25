<!-- Static navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<!-- header -->
	  	<div class="navbar-header">
	  		<!-- botao toggle -->
	      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra_navegacao">
	     		<span class="sr-only">Alternar Navegação</span><!--leitores de tela-->
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	      	</button>
		     <a href="index.php" class="navbar-brand">
		      	<img src="imagens/icon_ru.png" alt="Icone RU">
	            <span class="sr-only">RU - Refeitório Universitário UFBA</span>
	         </a>
		</div>
	    
	    <!-- navbar -->
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
	    </div><!--navbar -->
	
	</div><!-- container -->
</nav>