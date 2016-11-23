<?php

include 'conecta.php';
include 'query-banner.php';

    $nome = $_POST['nome'];
    $foto = $_FILES['arquivo']['name'];


        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensão do arquivo)
        $novo_nome = md5(time()) .$extensao; //define o nome do arquivo
        $diretorio = "img_banner/"; //define o diretírio pra onde enviar 

if(insereImgBanner($conexao, $nome, $novo_nome)){
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //eferua o upload pra pasta
        
        $_SESSION["success"] = "Banner Cadastrado com sucesso.";
        header("Location: banner-lista.php");

    }else{
        $_SESSION["danger"] = "Erro ao cadastrar.";
        header("Location: banner-lista.php");
    }    
?>