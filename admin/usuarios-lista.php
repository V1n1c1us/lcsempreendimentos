<?php 
include 'query-usuarios.php';
include 'query-sistema.php';
usuarioEstaLogado();
verificaUsuario();
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LCS Empreendimentos - Distribuidor NG de France e RICHEÉ</title>

	<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-32x32.png">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php include 'inc/menu.php';?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <?php 
          $usuarios = listaUsuarios($conexao);
          $res = count($usuarios);
        ?>
        <h3 class="text-center">Lista de Usuário (<?php echo $res;?>)</h3>
        <?php mostraAlerta("success");?>
        <table class="table">
        <tr>
          <th>Nome</th>
          <th>Email</th>
          <th>Telefone</th>
          <th>Login</th>
          <th class="text-center"><i class="fa fa-gear"></i></th>
          <th></th>
        </tr>
        <?php 
        if ($res) {
           foreach ($usuarios as $usuario) { ?>
            <tr>
              <td><?php echo $usuario['nome']?></td>
              <td><?php echo $usuario['email']?></td> 
              <td><?php echo $usuario['telefone']?></td>
              <td><?php echo $usuario['login']?></td>
              <td><a href="usuario-alterar.php?id=<?php echo $usuario['id']?>" class="btn btn-primary"><i class="fa fa-refresh"></i></a></td>
              <td>
                <form action="remove-usuario.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $usuario['id']?>">
                  <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </form>
              </td>
            </tr>
            <?php
          }
        }else{
          echo '<h3 class="text-center"><span class="label label-primary">Insira o Primeiro Usuário!!</span></h3>';
        }
        ?> 
        </table>
        </div>
      </div>
    </div>
    <script src="../js/jquery-1.9.1.min.js"></script>
	  <script src="../js/bootstrap.min.js"></script>
</body>
</html>