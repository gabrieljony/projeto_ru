<?php

session_start();

require_once('bd_class.php');

$usuario = $_POST['usuario'];

$senha	 = md5($_POST['senha']);

$sql = " SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha' ";

$objBd = new bd();
$link = $objBd->conectar_mysql();

$resultado_id = mysqli_query($link, $sql);

if($resultado_id){

	$dados_usuario = mysqli_fetch_array($resultado_id); // a função mysqli_fetch_array também recebeu um "i" em mysqli_...
	if(isset($dados_usuario['usuario'])){
        $_SESSION["id_usuario"] = $dados_usuario['id'];
        $_SESSION["usuario"] = $dados_usuario['usuario'];
        $_SESSION["email"] = $dados_usuario['email'];
        
        header("Location: home.php");
 
    } else {
        header("Location: index.php?erro=1");
	}

} else{
	echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
}


?>