<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Exames</title>
        <?php include PATH_VIEW . 'includes/css_config.php'?>
    </head>
    
    <body>
        <div id="global">

            <?php include PATH_VIEW . 'includes/cabecalho.php' ?>
            
            <main class="container mt-3">

                <h4>
                    Cadastro de Exames
                </h4>

                <form action="/exame/salvar" method="POST">

                    <div class="form-group">
                        
                        <input name="nomeExame" value="<?= isset($dados_exames) ? $dados_exames->nomeExame : "" ?>" type="text"
                            class="form-control" placeholder="Nome do Exame" autofocus="">
                        
                    </div>

                    <div class="form-group">
                         <input name="cidExame" value="<?= isset($dados_exames) ? $dados_exames->cidExame : "" ?>" type="text"
                            class="form-control" placeholder="CID 10" autofocus="">
                    </div>
                    
                    <div class="form-group">
                        <input name="descricaoExame" value="<?= isset($dados_exames) ? $dados_exames->descricaoExame : "" ?>" type="text"
                            class="form-control" placeholder="Descrição" autofocus="">
                    </div>
                    
                    <div class="form-group">
                        <input name="precoExame" value="<?= isset($dados_exames) ? $dados_exames->precoExame : "" ?>" type="text"
                            class="form-control" placeholder="Preço do Exame" autofocus="">
                    </div>

                    <div class="form-group">
                    <input name="tipoExame" value="<?= isset($dados_exames) ? $dados_exames->tipoExame : "" ?>" type="text"
                            class="form-control" placeholder="Tipo Exames" autofocus="">
                    </div>

                    <?php if (isset($dados_exames)) : ?>
                        <input type="hidden" name="idExame" value="<?= $dados_exames->idExame ?>" id="">
                        <a class="btn btn-danger" href="/exame/excluir?excluir=true&idExame=<?= $dados_exames->idExame ?>">Excluir</a>
                    <?php endif ?>

                    <button type=" submit" class="btn btn-success">Salvar</button>
                </form>
            </main> 
            <?php include PATH_VIEW . 'includes/rodape.php' ?>
            <?php include PATH_VIEW . 'includes/js_config.php'?>          
        </div>            
</body>

</html>