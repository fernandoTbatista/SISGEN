<header class="container mt-3">
    <div class="row">
        <div class="col-md-9">
            <h1>
                SISGEN
                <small>Sistema de Gestão</small>
            </h1>
        </div>
        <div class="col-sm mb-3">
            <fieldset>
                <legend>Dados do usuário</legend>
                Bem-vindo <strong> <?= App\Controller\LoginController::getNameOfUser() ?> </strong><a class="btn btn-dark" href="/sair">Sair</a>
            </fieldset>
        </div>
    </div>    
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"> <a class="nav-link" href="/"> Tela Inicial </a> </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Exames
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/exame/cadastrar">Cadastrar Exames</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/exame">Listar Exames</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Beneficiário
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/paciente/cadastrar">Cadastrar Benificiário</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/paciente">Listar Benificiário</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Plano
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/plano/cadastrar">Cadastrar Plano</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/plano">Listar Plano</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Usuário
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Cadastrar Usuário</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Listar Usuário</a>
                        </div>
                    </li>

                </ul>
            </div>    
        </nav>
</header>
