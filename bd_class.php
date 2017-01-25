<?php

class bd{

		//host
	private $host = 'localhost';
		//usuario
	private $user = 'root';
		//senha
	private $password = '';
		//banco de dados
	private $database = 'projeto_ru';

	public function conectar_mysql(){

		//cria a variável de conexão
		$conecao = mysqli_connect($this->host , $this->user, $this->password, $this->database);
		/*mysql_select_db($this->database) or die("Erro ao selecionar o Banco de Dados: ". mysql_error());

		mysql_query("SET NAME 'utf8'");
		mysql_query("SET character_set_connection=utf8");
		mysql_query("SET character_set_client=utf8");
		mysql_query("SET character_set_results=utf8");*/

		//ajusta o charset de comunicação entre a aplicação e o banco de dados
        mysqli_set_charset($conecao,"utf8");
 
        // verificando se houve erro de conexão
        if(mysqli_connect_errno()) {
        	echo "Erro ao tentar se conectar com o BD MySQL: " . mysqli_connect_error();
        }

		return $conecao;

	}
}





?>