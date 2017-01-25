<?php

require_once('bd_class.php');

//$_POST
//$_GET

$usuario = $_POST['usuario'];
$email	 = $_POST['email'];
$senha	 = md5($_POST['senha']);

$objBd = new bd();
$link = $objBd->conectar_mysql(); //agora você deve recuperar o link de conexão com o banco de dados criado na função conectar_mysql()

$usuario_existe = false;
$email_existe = false;

//verificar se o usuário já existe
$sql = " select * from usuario where usuario = '$usuario' ";
if($resultado_id = mysqli_query($link, $sql)){
	
	$dados = mysqli_fetch_array($resultado_id);
	if(isset($dados['usuario'])){
		$usuario_existe = true;
	}

} else {
	echo 'Erro ao tentar localizar o registro de usuário no banco de dados';
}

//verificar se o email já existe
$sql = " select * from usuario where email = '$email' ";
if($resultado_id = mysqli_query($link, $sql)){
	
	$dados = mysqli_fetch_array($resultado_id);
	if(isset($dados['email'])){
		$email_existe = true;
	}

} else {
	echo 'Erro ao tentar localizar o registro de usuário no banco de dados';
}
if($usuario_existe  || $email_existe){
	$retorno_get = '';
	if($usuario_existe){
		$retorno_get.= "erro_usuario=1&";
	}
	if($email_existe){
		$retorno_get.= "erro_email=1&";
	}
	header("Location: inscrevase.php?".$retorno_get);
	die();
}

$sql = "insert into usuario(usuario,email,senha)values('$usuario','$email','$senha')"; 
if(mysqli_query($link, $sql)){
	echo 'Usuário foi registrado com sucesso!';
} else {
	echo 'Erro ao tentar inserir o registro';
}

?>