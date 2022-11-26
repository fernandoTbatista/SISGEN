<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listar Pacientes</title>
    <?php include PATH_VIEW . 'includes/css_config.php'?>
</head>

<body>
    <?php include PATH_VIEW . 'includes/cabecalho.php' ?>
    <main class="container mt-4">

        <?php if(isset($_GET['excluido'])): ?>
        <p>Paciente foi Excluido</p>
        <?php endif ?>
        <h4 class="h m-3">Listar Beneficiários</h4>

        <table class="table table table-striped table-hover mt-4 ">
            <thead class="thead-dark">
                <tr>
                    <th>Ações</th>
                    <th>ID</th>
                    <th>Nome Paciente</th>
                    <th>Plano</th>
                    <th>Número Cartão</th>
                </tr>
            </thead>
                <tbody>
                    <?php for ($i = 0; $i < $total_pacientes; $i++) : ?>
                    <tr>
                        <td> <a href="/paciente/ver?idPaciente=<?= $lista_pacientes[$i]->idPaciente ?>"> Abrir</a> </td>
                        <td> <?= $lista_pacientes[$i]->idPaciente ?> </td>
                        <td> <?= $lista_pacientes[$i]->nomePaciente ?> </td>
                        <td> <?= $lista_pacientes[$i]->id_plano ?> </td>
                        <td> <?= $lista_pacientes[$i]->cartaoPaciente ?> </td>
                    </tr>
                    <?php endfor ?>
                </tbody>
        </table>
    </main>
    <?php include PATH_VIEW . 'includes/rodape.php' ?>
    <?php include PATH_VIEW . 'includes/js_config.php'?>
    
</body>
</html>

