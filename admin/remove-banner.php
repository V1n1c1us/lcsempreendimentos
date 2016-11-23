<?php
include 'query-sistema.php';
include 'query-banner.php';

usuarioEstaLogado();

$id = $_POST['id'];
$foto = $_POST['foto'];
if(removeImagemBanner($conexao, $id, $foto)){
	unlink("img_banner/$foto");
	$_SESSION["success"] = "Imagem Deletado com sucesso.";
	header("Location: banner-lista.php");
}else {
	$_SESSION["danger"] = "Erro ao Deletado.";
	header("Location: banner-lista.php");
}
die();
?>
