<?php 
  include 'admin/conecta.php';
  include 'admin/query-noticia.php';

  $noticias = listaNoticia($conexao);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>LCS Empreendimentos - Distribuidor NG de France e RICHEÉ</title>

		<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-32x32.png">
	   <!-- build:css css/noticias.min.css -->
  	<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
		
    <link rel="stylesheet" href="css/font-awesome.min.css">
	   <!-- endbuild -->
  </head>
	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <h1>
              <a href="#">
                <img class="img-logo" src="img/logo-marca.png" alt="Logomarca LCS Empreendimentos" title="Logomarca LCS Empreendimentos">
              </a>
            </h1>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="navigator">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                              data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                    </div>
                  <div class="collapse navbar-collapse menu" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                          <li><a href="index.php">home</a></li>
                          <li><a href="aempresa.php">a empresa</a></li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">marcas <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="ngdefrance.php">NG DE FRANCE</a></li>
                              <li><a href="richee.php">RICHEÉ PROFESSIONAL</a></li>
                            </ul>
                          </li>
                          <li class="active-menu"><a href="noticias.php">notícias</a></li>
                          <li><a href="contato.php">contato</a></li>
                      </ul>
                  </div>
          </div>
				</div>
			</div>
		</header>

		<section class="titulo-principal">
			<div class="container">
				<div class="row">
					<div class="titulo-header-white margin-header-titulo">
						<h2 class="titulo-white">NOTÍCIAS</h2>
					</div>
				</div>
			</div>
		</section>

		<section class="margin-60 margin-bottom-60">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <?php
              foreach ($noticias as $noticia) {
            ?>
            <div class="col-md-4">
              <a href="">
                <img class="img-responsive" src="admin/img_noticias/<?php echo $noticia['foto']?>"alt="<?php echo $noticia['resumo']?>">
              </a>
            </div>
            <div class="col-md-8">
              <h3><?php echo $noticia['titulo']?></h3>
              <p><?php echo $noticia['resumo']?></p>
              <div class="button-leiamais">
                <a href="noticiaCompleta.php?id=<?php echo $noticia["id"];?>">Leia Mais..</a>
              </div>
            </div>
          <?php }?>
          </div>
        </div>
      </div>			
		</section>		
		
<!--  FOOTER  -->
    <footer class="contato"> 
        <?php include 'inc/footer.php';?>     
    </footer>
    <!-- build:js js/noticias.min.js -->
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <!-- endbuild -->
	</body>
</html>