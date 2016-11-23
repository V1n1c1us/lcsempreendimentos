<?php
include 'conecta.php';

function insereUsuario($conexao, $nome, $email, $telefone, $login, $senha)
{
	$query = "INSERT INTO administrador(nome, email, telefone, login, senha) VALUES ('{$nome}','{$email}','{$telefone}','{$login}','{$senha}')";
	return mysqli_query($conexao, $query);
}

function listaUsuarios($conexao){
	$usuarios = array();
	$resultado = mysqli_query($conexao, "SELECT * FROM administrador");
	while ($usuario = mysqli_fetch_assoc($resultado)) {
		array_push($usuarios, $usuario);
	}
	return $usuarios;
}

function removeUsuario($conexao, $id){
	$query = "DELETE FROM administrador WHERE id = {$id}";
	return mysqli_query($conexao, $query);
}

function alteraUsuario($conexao, $id, $nome, $email, $telefone, $login, $senha){
	$query = "UPDATE administrador SET nome = '{nome}', email = '{email}', telefone = '{telefone}', login = '{login}', senha = '{senha}' WHERE id = {$id}";
	return mysqli_query($conexao, $query);
}

function buscaUsuarios($conexao, $id){
	$query = "SELECT * FROM administrador WHERE id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}
?> 