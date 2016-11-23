    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <?php if(usuarioEstaLogado()){?>
          <a class="navbar-brand" href="#">LCS Empreendimentos</a>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header"><b>Administrador</b></li>
                <li><a href="userCadastro.php">Cadastra Usuário</a></li>
                <li><a href="usuarios-lista.php">Listar Usuários</a></li>
                <li class="dropdown-header"><b>Home Page</b></li>
                <li role="separator" class="divider"></li>
                <li><a href="banner-cadastro.php">Cadastra Banner</a></li>
                <li><a href="banner-lista.php">Lista Banner</a></li>
                <li><a href="#">Produtos em Destaque</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header"><b>Notícias</b></li>
                <li><a href="noticia-cadastro.php">Cadastra Notícia</a></li>
                <li><a href="noticia-lista.php">Lista Notícia</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header"><b>Produtos></b></li>
                <li><a href="#">Cadastra Produto</a></li>
                <li><a href="#">Cadastra Marca</a></li>
                <li><a href="#">Cadastra Linha</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header"><b>Manuais></b></li>
                <li><a href="manual-cadastro.php">Cadastra Manual</a></li>
                <li><a href="manual-lista.php">Lista Manuais</a></li>
              </ul>
            </li>
            <li><a href="logout.php"><i class="fa fa-power-off"></i> Sair</a></li>
          </ul>
          <?php } ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>