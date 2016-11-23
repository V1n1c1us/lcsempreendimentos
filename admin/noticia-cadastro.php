<?php include 'query-sistema.php';
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
  <link rel="stylesheet" href="../css/fileinput.css">

</head>
<body>

    <?php include 'inc/menu.php';?>
   
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php include 'inc/formNoticia.php'; ?>
        </div>
      </div>
    </div>
    
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/fileinput.js"></script>
    <script src="../js/fileinput_locale_pt-BR.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckeditor/config.js"></script>
    <!--<script src="//cdn.ckeditor.com/4.6.0/full/ckeditor.js"></script>-->
        <script>
            CKEDITOR.replace('conteudo');
        </script>
</body>
</html>
