<?php
include 'conecta.php';

function insereNoticia($conexao, $titulo, $resumo, $conteudo, $foto, $fonte, $data){
	$query = "INSERT INTO noticia(titulo, resumo, conteudo, foto, fonte, data) VALUES ('{$titulo}','{$resumo}','{$conteudo}','{$foto}','{$fonte}', NOW())";
	return mysqli_query($conexao, $query);
}

function listaNoticia($conexao){
	$noticias = array();
	$resultado = mysqli_query($conexao, "SELECT * FROM noticia");
	while ($noticia = mysqli_fetch_assoc($resultado)) {
		array_push($noticias, $noticia);
	}
	return $noticias;
}

function buscaNoticia($conexao, $id){
	$query = "SELECT * FROM noticia WHERE id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function removeNoticia($conexao, $id){
	$query = "DELETE FROM noticia WHERE id = {$id}";
	return mysqli_query($conexao, $query);
}
?>