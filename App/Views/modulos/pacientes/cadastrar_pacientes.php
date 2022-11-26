    <!-- <?php
       // $plano_dao = new PlanoDAO();
       // $lista_planos = $plano_dao->getAllRows();
       // $total_planos = count($lista_planos);
     ?> -->

<html lang="pt-br">
    <head>
    <meta charset="utf-8">
        <title>Cadastro de Pacientes</title>
        <?php include PATH_VIEW . 'includes/css_config.php'?>
    </head>
    
    <body>
        <div id="global">

            <?php include PATH_VIEW . 'includes/cabecalho.php' ?>
            
            <main class="container mt-3">
            
                <h4>
                    Cadastro de Beneficiário
                </h4>

                <form action="/paciente/salvar" method="POST">

                    <div class="form-group">
                        <input name="nomePaciente" value="<?= isset($dados_pacientes) ? $dados_pacientes->nomePaciente : "" ?>" type="text"
                            class="form-control" placeholder="Nome do Paciente" autofocus="">
                    </div>

                    <div class="form-group">

                            <select class="form-control" name="id_plano">
                                <option>Selecione o Plano</option>

                                <?php  for($i=0; $i<$total_planos; $i++): 

                                    $selecionado = "";

                                    if(isset($dados_pacientes->idPaciente))
                                        $selecionado = ($lista_planos[$i]->idPlano == $dados_pacientes->id_plano) ? "selected" : "";
                                ?>

                                <option value="<?= $lista_planos[$i]->idPlano ?>" <?= $selecionado ?> >
                                    <?= $lista_planos[$i]-> nomePlano ?>                   
                                </option>
                                <?php endfor ?>
                            </select>
                    </div>

                    <div class="form-group">
                            <input name="cartaoPaciente" value="<?= isset($dados_pacientes) ? $dados_pacientes->cartaoPaciente : "" ?>" type="text"
                            class="form-control" placeholder="Número do Cartão" autofocus="">
                    </div>

                    <?php if (isset($dados_pacientes)): ?>
                        <input type="hidden" name="idPaciente"  value="<?= $dados_pacientes->idPaciente ?>" id="">
                        <a  class="btn btn-danger" href="/paciente/excluir?excluir=true&idPaciente=<?= $dados_pacientes->idPaciente ?>">Excluir</a>
                    <?php endif ?>

                    <button type=" submit" class="btn btn-success">Salvar</button>
                </form>
            </main> 
                <?php include PATH_VIEW . 'includes/rodape.php' ?>  
                <?php include PATH_VIEW . 'includes/js_config.php'?>        
        </div>            
</body>

</html>