<?php 

 session_start();

	
 
	$nome = $_POST['nome']; 
	$senha = $_POST['senha']; 
	$matricula = $_POST['matricula'];
	$cpf = $_POST['cpf'];
	$cargo = $_POST['cargo'];

	$con = mysql_connect("mysql.hostinger.com.br", "u208675905_sarah", "chatdb") or die ("Sem conexão com o servidor");
	$select = mysql_select_db("u208675905_chat") or die("ERROR"); 
	INSERT INTO usuario(nome, matricula, cpf, cargo, senha) VALUES(nome, matricula, cpf, cargo, senha); 
	

 ?>


