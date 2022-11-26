<?php

namespace App\Controller;

use App\DAO\ExamesDAO;

class ExameController extends Controller{

    public static function index()
    {
        parent::isProtected();

        $exame_dao = new ExamesDAO();
        $lista_exames = $exame_dao->getAllRows();
        $total_exames = count($lista_exames);

        include PATH_VIEW . 'modulos/exame/listar_exames.php';
    }

    public static function verExame()
    {
        parent::isProtected();

        if (isset($_GET['idExame']))
        {
            $exame_dao = new ExamesDAO();
            $dados_exames = $exame_dao->getById($_GET['idExame']);

            include PATH_VIEW . 'modulos/exame/cadastrar_exame.php';
        } else 
            header ("Location: /exame");
    }

    public static function cadastrarExame()
    {
        parent::isProtected();

        include PATH_VIEW . 'modulos/exame/cadastrar_exame.php';

    }

    public static function salvarExame()
    {
        parent::isProtected();

        $exame_dao = new ExamesDAO();
        
        $dados_para_salvar = array(
            'nomeExame' => $_POST["nomeExame"],
            'cidExame'  => $_POST["cidExame"],
            'descricaoExame'  => $_POST["descricaoExame"],
            'precoExame' => $_POST["precoExame"],
            'tipoExame' => $_POST["tipoExame"]
        );
    
        if (isset($_POST['idExame'])) {
    
            $dados_para_salvar['idExame'] = $_POST['idExame'];
            $exame_dao->update($dados_para_salvar);
              
        } else {
            $exame_dao->insert($dados_para_salvar);
        }

        header("Location: /exame");
    }

    public static function excluirExame()
    {
        parent::isProtected();

        $paciente_dao = new ExamesDAO();
        $paciente_dao->delete($_GET['idExame']);
       
        header("Location: /exame");
    }
}