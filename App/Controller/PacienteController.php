<?php

namespace App\Controller;

use App\DAO\{PacientesDAO, PlanoDAO};

class PacienteController extends Controller{

    public static function index()
    {
        parent::isProtected();

        $paciente_dao = new PacientesDAO();
        $lista_pacientes = $paciente_dao->getAllRows();
        $total_pacientes = count($lista_pacientes);

        include PATH_VIEW . 'modulos/pacientes/listar_pacientes.php';
    }

    public static function verPaciente()
    {
        parent::isProtected();

        if (isset($_GET['idPaciente'])) {
                
            $paciente_dao = new PacientesDAO();
            $dados_pacientes = $paciente_dao->getById($_GET['idPaciente']);

            include PATH_VIEW . 'modulos/pacientes/cadastrar_pacientes.php';
        } else
            header ("Location: /paciente");
    }

    public static function cadastrarPaciente()
    {
        parent::isProtected();
        //Obtendo os Planos   

        $plano_dao = new PlanoDAO();
        $lista_planos = $plano_dao->getAllRows();
        $total_planos = count($lista_planos);
        
        include PATH_VIEW . 'modulos/pacientes/cadastrar_pacientes.php';
    }

    public static function salvarPaciente()
    {
        parent::isProtected();
        $paciente_dao = new PacientesDAO();
    
        $dados_para_salvar = array(
            'nomePaciente' => $_POST["nomePaciente"],
            'id_plano'  => $_POST["id_plano"],
            'cartaoPaciente' => $_POST["cartaoPaciente"],
        );
    
        if (isset($_POST['idPaciente'])) {
    
            $dados_para_salvar['idPaciente'] = $_POST['idPaciente'];
            $paciente_dao->update($dados_para_salvar);
    
                echo "Atualizado.";

        } else {

                $paciente_dao->insert($dados_para_salvar);
                    echo "Inserido.";
            }

            header ("Location: /paciente");
    }

    public static function excluirPaciente()
    {
        parent::isProtected();
        if(isset($_GET['idPaciente']))
        {
            $paciente_dao = new PacientesDAO();
            $paciente_dao->delete($_GET['idPaciente']);

            header("Location: /paciente?excluir=true");
        } else 
            header("Location: /paciente");
    }
   
}