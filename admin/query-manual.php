<?php 
include 'conecta.php';


function insereManual($conexao, $titulo, $resumo, $arquivoManual, $data){
	$query = "INSERT INTO manuais(titulo, resumo, arquivo, data) VALUES ('{$titulo}','{$resumo}','{$arquivoManual}', NOW())";
	return mysqli_query($conexao, $query);
}

function listaManuais($conexao){
	$manuais = array();
	$resultado = mysqli_query($conexao, "SELECT * FROM manuais");
	while ($manual = mysqli_fetch_assoc($resultado)) {
		array_push($manuais, $manual);
	}
	return $manuais;
}

function removeManual($conexao, $id){
	$query = "DELETE FROM manuais WHERE id = {$id}";
	return mysqli_query($conexao, $query);
}




?>