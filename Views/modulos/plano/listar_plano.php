<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistema</title>
    <?php include PATH_VIEW . 'includes/css_config.php'?>
</head>
<body>
    <?php include PATH_VIEW . 'includes/cabecalho.php' ?>
    <main class="container mt-4">

        <?php if(isset($_GET['excluido'])): ?>
        <p>Plao foi Excluido</p>
        <?php endif ?>

        <h4 class="h m-3">Listar Convênio</h4>

        <table class="table table table-striped table-hover mt-4 ">
            <thead class="thead-dark">
                <tr>
                    <th>Ações</th>
                    <th>ID</th>
                    <th>Nome Plano</th>
                </tr>
            </thead>
                <tbody>
                    <?php for ($i = 0; $i < $total_planos; $i++) : ?>
                    <tr>
                        <td> <a href="/plano/ver?idPlano=<?= $lista_planos[$i]->idPlano ?>"> Abrir</a> </td>
                        <td> <?= $lista_planos[$i]->idPlano ?> </td>
                        <td> <?= $lista_planos[$i]->nomePlano ?> </td>
                    </tr>
                    <?php endfor ?>
                </tbody>
        </table>
    </main>
    <?php include PATH_VIEW . 'includes/rodape.php' ?>
    <?php include PATH_VIEW . 'includes/js_config.php'?>
    
</body>
</html>

