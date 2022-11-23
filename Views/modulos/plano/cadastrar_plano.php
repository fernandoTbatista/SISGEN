<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro do Plano</title>
        <?php include PATH_VIEW . 'includes/css_config.php'?>
    </head>
    
    <body>
        <div id="global">

            <?php include PATH_VIEW . 'includes/cabecalho.php' ?>
            
            <main class="container mt-3">
            <h4>
                    Cadastro de Convênio
                </h4>
                <div class="box">
                        <form action="/plano/salvar" method="POST">

                            <div class="form-group">
                                <input name="nomePlano" value="<?= isset($dados_planos) ? $dados_planos->nomePlano : "" ?>" type="text"
                                    class="form-control" placeholder="Nome do Plano" autofocus="">
                            </div>
                                
                            <?php if (isset($dados_planos)) : ?>
                                <input type="hidden" name="idPlano" value="<?= $dados_planos->idPlano ?>" id="">
                                <a class="btn btn-danger" href="/plano/excluir?excluir=true&idPlano=<?= $dados_planos->idPlano ?>">Excluir</a>
                            <?php endif ?>

                            <button type=" submit" class="btn btn-success">Salvar</button>
                        </form>
                    </div>    
            </main> 
            <?php include PATH_VIEW . 'includes/rodape.php' ?>    
            <?php include PATH_VIEW . 'includes/js_config.php'?>      
        </div>            
</body>

</html>