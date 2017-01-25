<?php

session_start();

$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;


require_once('bd_class.php');

$nome				= $_POST['nome'];
$email 				= $_POST['email'];
$telefone 			= $_POST['telefone'];
$motivo 			= $_POST['motivo'];
$assunto 			= $_POST['assunto'];
$txt_mensagem 		= $_POST['txt_mensagem'];

$objBd = new bd();
$link = $objBd->conectar_mysql();

//query de insert
$sql = " INSERT INTO fale_conosco(nome, email, telefone, motivo, assunto, mensagem)values('$nome', '$email', '$telefone', '$motivo', '$assunto', '$txt_mensagem') ";

mysqli_query($link, $sql);

?>