<?php
$_UP['pasta'] = 'diretodio';

$_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb

$_UP['extensoes'] = array('jpg', 'png', 'gif');

$_UP['renomeia'] = true;


$extensao = strtolower(end(explode('.', $_FILES['img']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {
	header("location:../inserir_portifolio.php?info=erro-extesao");
	exit;
}

else if ($_UP['tamanho'] < $_FILES['img']['size']) {
header("location:../inserir_portifolio.php?info=erro-tamanho");
exit;
}


else {

if ($_UP['renomeia'] == true) {

$nome_final = time().'.jpg';
} else {

$nome_final = $_FILES['img']['name'];
}

if (move_uploaded_file($_FILES['img']['tmp_name'], $_UP['pasta'] . $nome_final)) {

} else {

header("location:../inserir_portifolio.php?info=erro-img");
exit;
}

}

?>
