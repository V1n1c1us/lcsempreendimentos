<?php 
include 'query-manual.php';
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
          $manuais = listaManuais($conexao);
          $res = count($manuais);
          ?>
        <h3 class="text-center">Lista de Manuais (<?php echo $res;?>)</h3>
        <?php mostraAlerta("success");?>
        <table class="table">
        <tr>
          <th class="text-center">Título</th>
          <th class="text-center">Resumo</th>
          <th class="text-center"><i class="fa fa-gear"></i></th>
        </tr>
        <?php
          if($res){
            foreach ($manuais as $manual) {
            ?>
            <tr>
              <td><a href="manuais/<?php echo $manual['arquivo']?>" alt=""><i class="fa fa-file"></i> <?php echo $manual['titulo']?></a></td>
              <td><?php echo $manual['resumo']?></td> 
              <td>
                <form action="remove-manual.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $manual['id']?>">
                  <input type="hidden" name="arquivo" value="<?php echo $manual['arquivo']?>">
                  <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </form>
              </td>
            </tr>
            <?php
              }
          }else{
            echo '<h3 class="text-center"><span class="label label-primary">Insira o Primeiro Manual!!</span></h3>';
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