<div class="container menu_lateral">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
	    		<ul class="nav nav-pills nav-stacked col-md-3 page-header"> 
	    			<li role="presentation" class="active">
	    				<a href="#administrador" data-toggle="pill">Administrador</a>
	    			</li> 
	    			<li role="presentation">
	    				<a href="#relatorios" data-toggle="pill">Relatórios</a>
	    			</li> 
	    			<li role="presentation">
	    				<a href="#cadastro" data-toggle="pill">Cadastro</a>
	    			</li>
	    			<li role="presentation">
	    				<a href="#ticket" data-toggle="pill">Ticket</a>
	    			</li>
	    			<li role="presentation">
	    				<a href="#usuario" data-toggle="pill">Usuário</a>
	    			</li>
	    		</ul>
				<div class="tab-content col-md-8">
					 <div class="tab-pane active" id="administrador">
					 	<?php include 'administrador.inc'; ?>
					 </div>
	                 <div class="tab-pane" id="relatorios">
	                 	<?php include 'relatorios.inc'; ?>
	                 </div>
	                 <div class="tab-pane" id="cadastro">
						<?php include 'cadastro.inc'; ?>
	                 </div>
	                 <div class="tab-pane" id="ticket">
						<?php include 'ticket.inc'; ?>
	                 </div>
	                 <div class="tab-pane" id="usuario">
						<?php include 'usuario.inc'; ?>
	                 </div>
				</div>
		</div>
		<div class="col-md-1"></div>
		
		<div class="clearfix"></div>
		<br />
		<div class="col-md-2"></div>
		<div class="col-md-2"></div>
		<div class="col-md-6"></div>
		<div class="col-md-2"></div>
	</div>
</div>
