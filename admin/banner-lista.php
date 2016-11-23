<?php
include 'query-banner.php';
include 'query-sistema.php';

verificaUsuario();
usuarioEstaLogado();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <eta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content= "width=device-width, initial-scale=1">
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
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <?php
            mostraAlerta("success");
            mostraAlerta("danger");
            $imagens = listaImgBanner($conexao);
            $res = count($imagens);
        ?>
        <h3 class="text-center">Lista Banners (<?php echo $res;?>)</h3>
          <ul class="banner-lista">
          <?php
            if ($res) {
              foreach ($imagens as $imagem) {
                ?>
                <li>
                  <img class="img media-object-banner" src="img_banner/<?php echo $imagem['foto'];?>" alt="<?php echo $imagem['nome'];?>">
                 <form action="remove-banner.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $imagem['id']?>">
                    <input type="hidden" name="foto" value="<?php echo $imagem['foto']?>">
                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                  </form>
                </li>
                <?php
              }
            }else{
              ?>
            
            <h3 class="text-center"><span class="label label-primary">Insira a Primeira Imagem no Banner!!</span></h3>
            <?php
          }
          ?>
          </ul>

        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
  </html>
