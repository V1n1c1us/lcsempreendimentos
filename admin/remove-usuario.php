<?php
include 'query-usuarios.php';
include 'query-sistema.php';

usuarioEstaLogado();

$id = $_POST['id'];
if(removeUsuario($conexao,$id)){
	$_SESSION["success"] = "Usuário Deletado com sucesso.";
	header("Location: usuarios-lista.php");
}else {
	$_SESSION["danger"] = "Erro ao Deletar.";
	header("Location: usuarios-lista.php");
}
die();
?>
