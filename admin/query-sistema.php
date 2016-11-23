<?php
session_start();
include 'conecta.php';

function mostraAlerta($tipo){
	if (isset($_SESSION[$tipo])) {
	?>
		<p class="text-".<?php echo $tipo; ?>. " text-center"><b><?php echo $_SESSION[$tipo];?></b></p>
	<?php
		unset($_SESSION[$tipo]);
	}
}

function verificaUsuario(){
	$_SESSION["danger"] = "Acesso Negado";
	if(!usuarioEstaLogado()){
  		header("Location: index.php?falhaDeSeguranca=true");
  		die();
	}
}
function usuarioEstaLogado(){
	return isset($_SESSION["usuario_logado"]);
}

function usuarioLogado(){
	return $_SESSION["usuario_logado"];
}

function logaUsuario($login){
	$_SESSION["usuario_logado"] = $login;
}

function logout(){
	session_destroy();
	session_start();
}

function verificaLogin($conexao, $login, $senha){
	$senhaCripto = md5($senha);
	$query = "SELECT * FROM administrador WHERE login = '{$login}' and senha = '{$senhaCripto}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}

?>