<?php

class PlanoController extends Controller{

    public static function index()
    {
        parent::isProtected();

        $plano_dao = new PlanoDAO();
        $lista_planos = $plano_dao->getAllRows();
        $total_planos = count($lista_planos);

        include 'Views/modulos/plano/listar_plano.php';
    }

    public static function verPlano()
    {
        parent::isProtected();

        if (isset($_GET['idPlano'])) 
        {
            $plano_dao = new PlanoDAO();
            $dados_planos = $plano_dao->getById($_GET['idPlano']);
        
            include 'Views/modulos/plano/cadastrar_plano.php';
        } else 
            header ("Location: /plano");
    }

    public static function cadastrarPlano()
    {
        parent::isProtected();
        include 'Views/modulos/plano/cadastrar_plano.php';

    }

    public static function salvarPlano()
    {
        parent::isProtected();
        $plano_dao = new PlanoDAO();

        $dados_para_salvar = array(
            'nomePlano' => $_POST["nomePlano"],
        );
    
        if (isset($_POST['idPlano'])) {

            $dados_para_salvar['idPlano'] = $_POST['idPlano'];
            $plano_dao->update($dados_para_salvar);

        }else {
            $plano_dao->insert($dados_para_salvar);
        }
        header("Location: /plano");
    }

    public static function excluirPlano()
    {
        parent::isProtected();
        $plano_dao = new PlanoDAO();
        $plano_dao->delete($_GET['idPlano']);
      
        header("Location: /plano");
    }
}