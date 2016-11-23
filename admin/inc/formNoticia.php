
<form method="post" action="adiciona-noticia.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" id="titulo" placeholder="Título" name="titulo" >
    </div>
        <div class="form-group">
        <label for="resumo">Resumo</label>
        <input type="text" class="form-control" id="resumo" placeholder="Resumo da Notícia" name="resumo">
    </div>
    <div class="form-group">
        <label for="conteudo">Conteúdo</label>
        <textarea class="form-control" id="conteudo" placeholder="Conteúdo da Notícia" name="conteudo"></textarea>

    </div>
        <div class="form-group">
        <label for="foto">Imagem</label>
        <input id="file-0a" class="file" type="file" multiple data-min-file-count="1" name="arquivo">
    </div>
    <div class="form-group">
        <label for="fonte">Fonte</label>
        <input type="text" class="form-control" id="fonte" placeholder="De onde?" name="fonte">
    </div>
    <button type="submit" class="btn btn-success pull-right" id="btnPublicar" title="Publicar Notícia">Publicar</button>
</form>
<div id="status"></div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<script>
            CKEDITOR.replace('conteudo');
        </script>
<!-- /#page-wrapper -->


