<?php
include 'query-sistema.php';
include 'query-noticia.php';

usuarioEstaLogado();

$id = $_POST['id'];
if(removeNoticia($conexao,$id)){
	$_SESSION["success"] = "Notícia Deletado com sucesso.";
	header("Location: noticia-lista.php");
}else {
	$_SESSION["danger"] = "Eroo ao Deletado.";
	header("Location: noticia-lista.php");
}
die();
?>
