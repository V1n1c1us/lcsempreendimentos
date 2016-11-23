<?php
include 'query-sistema.php';
include 'query-manual.php';

usuarioEstaLogado();

$id = $_POST['id'];
$arquivoManual = $_POST['arquivo'];
if(removeManual($conexao, $id, $arquivoManual)){
	unlink("manuais/$arquivoManual");
	$_SESSION["success"] = "Arquivo Deletado com sucesso.";
	header("Location: manual-lista.php");
}else {
	$_SESSION["danger"] = "Erro ao Deletado.";
	header("Location: manual-lista.php");
}
die();
?>
