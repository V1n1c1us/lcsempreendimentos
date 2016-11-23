<form id="fomrProdutos" action="adiciona-usuario.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="nome">Nome Completo</label>
              <input type="text" class="form-control" id="nome" placeholder="Nome do Usuário" name="nome"
                required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                required>
            </div>
            <div class="form-group">
              <label for="telefone">Telefone</label>
              <input type="tel" class="form-control" id="telefone" placeholder="Telefone" name="telefone"
                required>
            </div>
            <div class="form-group">
              <label for="login">Telefone</label>
              <input type="text" class="form-control" id="login" placeholder="Login" name="login"
                required>
            </div>
            <div class="form-group">
              <label for="senha">Telefone</label>
              <input type="text" class="form-control" id="senha" placeholder="Senha" name="senha"
                required>
            </div>
            <span id="msg"></span>
            <button type="submit" class="btn btn-success pull-right" title="Publicar Notícia">Cadastrar</button>
        </form>