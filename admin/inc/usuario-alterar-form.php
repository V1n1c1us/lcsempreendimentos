<?php 

$id = $_GET['id'];
$usuario = buscaUsuarios($conexao, $id);
?>

<h1>Altera Usuário</h1>
<form id="fomrProdutos" action="altera-usuario.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $usuario['id']?>">
  <div class="form-group">
    <label for="nome">Nome Completo</label>
    <input type="text" class="form-control" id="nome" name="nome"
    value="<?php echo $usuario['nome']?>">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email" name="email"
    value="<?php echo $usuario['email']?>">
  </div>
  <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="tel" class="form-control" id="telefone" placeholder="Telefone" name="telefone" value="<?php echo $usuario['telefone']?>">
  </div>
  <div class="form-group">
    <label for="login">Telefone</label>
    <input type="text" class="form-control" id="login" placeholder="Login" name="login" value="<?php echo $usuario['login']?>">
  </div>
  <div class="form-group">
    <label for="senha">Telefone</label>
    <input type="text" class="form-control" id="senha" placeholder="Senha" name="senha" value="<?php echo $usuario['senha']?>">
  </div>
  <button type="submit" class="btn btn-success pull-right" title="Publicar Notícia">Cadastrar</button>
</form>