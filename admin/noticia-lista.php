<?php 
include 'query-noticia.php';
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
          mostraAlerta("success");
          $noticias = listaNoticia($conexao);
          $res = count($noticias);
          ?>
          <h3 class="text-center">Lista de Usuário (<?php echo $res;?>)</h3>
        <table class="table">
         <?php
          if ($res) {
            foreach ($noticias as $noticia) {
          ?>
				<tr class="text-center">
        	<th>Img</th>
        	<th>Título</th>
        	<th>Resumo</th>
        	<th>Data</th>
        	<th><i class="fa fa-gear"></i></th>
        </tr>
        <tr>
	       	<th><img class="img media-object" src="img_noticias/<?php echo $noticia['foto']?>" alt="<?php echo $noticia['resumo']?>"></th>
  	      <td><?php echo $noticia['titulo']?></td>
    	    <td><?php echo $noticia['resumo']?></td>
      	  <td><?php echo $noticia['data']?></td>
        	<td><form action="remove-noticia.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $noticia['id']?>">
                  <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </form>
          </td>
        </tr>
            <?php
          	}
          }else{
          	?>
          	<h3 class="text-center"><span class="label label-primary"><i class="fa fa-newspaper-o"></i> Insira a Primeira Notícia!!</span></h3>	
         <?php
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