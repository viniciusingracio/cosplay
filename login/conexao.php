<?php
	$servidor = "br518.hostgator.com.br";
	$usuario = "thebi671_cosplay";
	$senha = "scpastec1539";
	$dbname = "thebi671_logincosplay";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>