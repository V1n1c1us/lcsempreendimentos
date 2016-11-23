<?php
include 'conecta.php';

function insereImgBanner($conexao, $nome, $foto){
	$query = "INSERT INTO img_banner (nome, foto) VALUES ('{$nome}', '{$foto}')";
	return mysqli_query($conexao, $query);
}

function listaImgBanner($conexao){
	$imagens = array();
	$resultado = mysqli_query($conexao, "SELECT * FROM img_banner");
	while ($imagem = mysqli_fetch_assoc($resultado)) {
		array_push($imagens, $imagem);
	}
	return $imagens;
}

function removeImagemBanner($conexao, $id){
	//função com ID
	$query = "DELETE FROM img_banner WHERE id = {$id}";
	return mysqli_query($conexao, $query);
}


?>