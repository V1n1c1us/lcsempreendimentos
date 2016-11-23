<?php

include 'conecta.php';
include 'query-usuarios.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $senhaCripto = md5($senha);
    
    if(insereUsuario($conexao, $nome, $email, $telefone, $login, $senhaCripto)){
        $_SESSION["success"] = "Usuário Cadastrado com sucesso.";
        header("Location: usuarios-lista.php");
	}else{
        $_SESSION["danger"] = "Erro ao cadastrar.";
        header("Location: userCadastro.php");
    }
    die();
?>