<?php
//conecta o banco MySql

$banco_dados="";
$user_db="";
$senha_db="";
$hostname="";

$conexao=mysql_connect($hostname,$user_db,$senha_db);
mysql_select_db($banco_dados) or die("Erro na conexão com o banco de dados");
mysql_close();
?>
