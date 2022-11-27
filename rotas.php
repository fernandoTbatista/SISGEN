<?php

use App\Controller\{DashboardController, LoginController, ExameController, PacienteController, PlanoController};

try{

    switch($uri_parse)
    
    {
        //TELA INICIAL
        case '/':
            DashboardController::index();
        break;


        case '/login':
            LoginController::login();
            //include 'Views/login.php';
        break;
        
        case '/autenticar':
            LoginController::autenticar();
        break;

        case '/esqueci-a-senha':
            LoginController::esqueciSenha();
        break;

        case '/enviar-nova-senha':
            LoginController::enviarNovaSenha();

        
        break;

        case '/sair':
            LoginController::sair();
        break;
        //============================================================================

        // ROTAS PARA TRABALHAR COM PACIENTES:
        case '/paciente':
            PacienteController::index();
        break;

        case '/paciente/ver':       
            PacienteController::verPaciente();
        break;

        case '/paciente/cadastrar':           
            PacienteController::cadastrarPaciente();
        break;

        case '/paciente/salvar':
            PacienteController::salvarPaciente();
        break;

        case '/paciente/excluir';
            PacienteController::excluirPaciente();
        break;
        //============================================================================

        // ROTAS PARA TRABALHAR COM EXAMES
        case '/exame';
            ExameController::index();     
        break;

        case '/exame/ver';
            ExameController::verExame();
        break;

        case '/exame/cadastrar';
            ExameController::cadastrarExame();            
        break;

        case '/exame/salvar';
            ExameController::salvarExame();
        break;    
        
        case '/exame/excluir';
            ExameController::excluirExame();
        break;
        //============================================================================

        // ROTAS PARA TRABALHAR COM PLANOS
        case '/plano';
            PlanoController::index();        
        break;

        case '/plano/ver';
            PlanoController::verPlano();
        break;
           
        case '/plano/cadastrar';
            PlanoController::cadastrarPlano();
        break;

        case '/plano/salvar';
            PlanoController::salvarPlano();
        break;        

        case '/plano/excluir';
            PlanoController::excluirPlano();          
        break;
        //============================================================================

        default:

            echo"Rota inválida!!!";

        break;
    }
}catch(Exception $e)
{
    echo "Deu ruim " . $e->getMessage();
}