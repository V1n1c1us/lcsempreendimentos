<?php

include 'conecta.php';
include 'query-noticia.php';

    $titulo = $_POST['titulo'];
    $resumo = $_POST['resumo'];
    $conteudo = $_POST['conteudo'];
    $foto = $_FILES['arquivo']['name'];
    $fonte = $_POST['fonte'];
    $data = $_POST['data'];


        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensão do arquivo)
        $novo_nome = md5(time()) .$extensao; //define o nome do arquivo
        $diretorio = "img_noticias/"; //define o diretírio pra onde enviar 
if(insereNoticia($conexao, $titulo, $resumo, $conteudo, $novo_nome, $fonte, $data)){
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //eferua o upload pra pasta

        $_SESSION["success"] = "Usuário Cadastrado com sucesso.";
        header("Location: noticia-lista.php");

    }else{
        $_SESSION["danger"] = "Erro ao cadastrar.";
        header("Location: noticia-lista.php");
    }    
?>