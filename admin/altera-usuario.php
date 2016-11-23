<?php

include 'conecta.php';
include 'query-usuarios.php';
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if(alteraUsuario($conexao, $id, $nome, $email, $telefone, $login, $senha)){
        $_SESSION["success"] = "Usuário atualizado com sucesso.";
        header("Location: usuarios-lista.php");
	}else{
        $_SESSION["success"] = "Erro ao atualizar o cadastrado";
        header("Location: usuario-alterar.php");
    }
?>
