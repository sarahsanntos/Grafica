<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

session_start();
	
	if(isset($_SESSION['nome'])) {
		session_destroy();
		echo "

	<p>Você saiu com sucesso da aplicação!</p> </br>

	<a href='index.php'> Clique aqui </a> para retornar à página inicial";
		exit;
	}

?>
