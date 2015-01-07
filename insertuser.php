<?php 

include("config/conn.php");

	
 
	$nome = $_POST['nome']; 
	$senha = $_POST['senha']; 
	$matricula = $_POST['matricula'];
	$cpf = $_POST['cpf'];
	$cargo = $_POST['cargo'];

	$sql= "INSERT INTO usuario(nome, matricula, cpf, cargo, senha)";
+	$sql .= "VALUES('$nome', '$matricula', '$cpf', '$cargo', '$senha')"; 
+	
+	if($resultado= mysql_query($sql)){
+		header('listagem.php');
+	}
+	
+	else{
+		header('');
+	};

	

 ?>


