<?php

include 'conecta.php';
include 'query-manual.php';

    $titulo = $_POST['titulo'];
    $resumo = $_POST['resumo'];
    $arquivoManual = $_FILES['arquivo']['name'];
    $data = $_POST['data'];

        date_default_timezone_set("Brazil/East"); // define timezone padrão

        $extensaoArquivo = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensão do arquivo)
        $novo_nome = md5(time()) .$extensaoArquivo; //define o nome do arquivo
        $diretorio = "manuais/"; //define o diretírio pra onde enviar 
if(insereManual($conexao, $titulo, $resumo, $novo_nome, $data)){
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //eferua o upload pra pasta

        $_SESSION["success"] = "Manual Cadastrado com Sucesso com sucesso.";
        header("Location: manual-lista.php");

    }else{
        $_SESSION["danger"] = "Erro ao cadastrar.";
        header("Location: manual-lista.php");       
    }    
?>