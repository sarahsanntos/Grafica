<?php
header('Content-Type: text/html; charset=UTF-8');

//conecta o banco MySql
$banco_dados="u208675905_chat";
$user_db="u208675905_sarah";
$senha_db="chatdb";
$hostname="mysql.hostinger.com.br";

$conexao=mysql_connect($hostname,$user_db,$senha_db); mysql_select_db($banco_dados) or die("Erro na conexão com o banco de dados");

 if(!$conexao)
     {
  echo "Erro na conexão com o banco de dados";exit; 
    } 
else{
   echo "Conexão bem sucedida";
    }
mysql_close();
?>
