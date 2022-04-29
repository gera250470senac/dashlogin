<?php
	$servidor = "db_alunos.mysql.dbaas.com.br";
	$usuario = "db_alunos";
	$senha = "Capile10##";
	$dbname = "db_alunos";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>