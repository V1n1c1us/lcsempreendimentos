<?php
include 'query-usuarios.php';

usuarioEstaLogado();

$id = $_POST['id'];
if(removeUsuario($conexao,$id)){
	$_SESSION["success"] = "Usuário Deletado com sucesso.";
	header("Location: usuarios-lista.php");
}else {
	$_SESSION["success"] = "Usuário Deletado com sucesso.";
	header("Location: usuarios-lista.php");
}
die();
?>
