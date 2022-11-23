<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listar Exames</title>
    <?php include PATH_VIEW . 'includes/css_config.php'?>
</head>

<body>
    <?php include PATH_VIEW . 'includes/cabecalho.php' ?>
    <main class="container mt-4">

        <?php if(isset($_GET['excluido'])): ?>
        <p>Exame foi Excluido</p>
        <?php endif ?>

        <h4 class="h m-3">Lista de Exames</h4>

        <table class="table table table-striped table-hover mt-4 ">
            <thead class="thead-dark">
                <tr>
                    <th>Ações</th>
                    <th>ID</th>
                    <th>Nome Exame</th>
                    <th>CID10</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Tipo Exame</th>
                </tr>
            </thead>
                <tbody>
                    <?php for ($i = 0; $i < $total_exames; $i++) : ?>
                    <tr>
                        <td> <a href="/exame/ver?idExame=<?= $lista_exames[$i]->idExame ?>"> Abrir</a> </td>
                        <td> <?= $lista_exames[$i]->idExame ?> </td>
                        <td> <?= $lista_exames[$i]->nomeExame ?> </td>
                        <td> <?= $lista_exames[$i]->cidExame ?> </td>
                        <td> <?= $lista_exames[$i]->descricaoExame ?> </td>
                        <td> <?= $lista_exames[$i]->precoExame ?> </td>
                        <td> <?= $lista_exames[$i]->tipoExame ?> </td>
                    </tr>
                    <?php endfor ?>
                </tbody>
        </table>
    </main>
    <?php include PATH_VIEW . 'includes/rodape.php' ?>
    <?php include PATH_VIEW . 'includes/js_config.php'?>
</body>
</html>

