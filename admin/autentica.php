<?php
include 'conecta.php';
include 'query-sistema.php';

$login = $_POST["login"];
$senha = $_POST["senha"];


$usuario = verificaLogin($conexao, $login, $senha);


if($usuario == null){
	$_SESSION["danger"] = "Usuário ou senha inválida!";
	header("Location: index.php");
}else{
	logaUsuario($usuario["login"]);
	header("Location: index.php");
}
die();

?>