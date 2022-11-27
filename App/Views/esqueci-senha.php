<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Esqueci a Senha</title>
    <?php include PATH_VIEW . 'includes/css_config.php'?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Esqueci a Senha</h3>
                    <h3 class="title has-text-grey">Consultório</h3>

                    <div class="box">
                        <form action="/enviar-nova-senha" method="POST">

                            <p>
                                <?= isset($retorno) ? $retorno : NULL ?>
                            </p>
                            <div class="field">

                                <div class="control">
                                    <input id="email" name="email" name="email" class="input is-large" placeholder="Digite seu Email"
                                        autofocus="">
                                </div>
                            </div>

                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Enviar nova Senha</button>
                            <a href="/login" class="btn">Voltar </a>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>