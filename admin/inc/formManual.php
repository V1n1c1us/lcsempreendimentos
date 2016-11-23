<form id="fomrProdutos" action="adiciona-manual.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="nome">Título</label>
              <input type="text" class="form-control" id="titulo" placeholder="Título do Manual" name="titulo"
                required>
            </div>
            <div class="form-group">
              <label for="telefone">Resumo</label>
              <textarea type="text" class="form-control" id="resumo" placeholder="Resumo" name="resumo"
                required></textarea> 
            </div>
            <div class="form-group">
              <label for="login">Arquivo</label>
              <input type="file" class="form-control" id="arquivo" placeholder="arquivo" name="arquivo"
                required>
            </div>
            <button type="submit" class="btn btn-success pull-right" title="Publicar Manual">Cadastrar</button>
        </form>