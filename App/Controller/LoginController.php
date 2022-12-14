<?php

namespace App\Controller;

use App\DAO\LoginDAO;
use think\Exception;

class LoginController extends Controller{

    public static function login()
    {
        $usuario = (isset($_COOKIE['sisgen_user'])) ? $_COOKIE['sisgen_user'] :'';
        include PATH_VIEW . 'login.php';
    }

    public static function esqueciSenha()
    {
        include PATH_VIEW . 'esqueci-senha.php';
    }

    public static function enviarNovaSenha()
    {
        try {
            

            $nova_senha = uniqid();
            $email = $_POST['email'];
            
            $login_dao = new LoginDAO();
            $login_dao->setNewPassWordForUserByEmail($email, $nova_senha);

            $assunto = "Nova Senha do Sistema";
            $mensagem = "Sua nova senha é: " . $nova_senha;


            $retorno = "Caso seu email esteja em nosso sistema você acaba de receber uma nova senha.";

            if(!mail($email, $assunto, $mensagem))
            {
                $teste = "Senha gerada: " . $nova_senha;

                throw new Exception("Desculpa, ocorreu um erro ao enviar o email." . $teste);
                
            }
        } catch(Exception $e) {

            $retorno = $e->getMessage();

        }    

        include PATH_VIEW . 'esqueci-senha.php';
    }

    public static function autenticar()
    {
        $usuario = $_POST["user"];
        $senha   = $_POST["pass"];

        $login_dao = new LoginDAO();

        $resultado = $login_dao->getUserByUserAndPass($usuario, $senha);

        if($resultado !== false)
        {
            $_SESSION["usuario_logado"] = array('id' => $resultado->id_usuario,
                                                'nome' => $resultado->nomeCompleto);
            
            if(isset($_POST['remember']))        
                                        
                self::remember($usuario);

            header ("Location: /");

        }else
            header("Location: /login?fail=true");

    }

    private static function remember($user){

        $validade = strtotime("+1 month");

        setcookie("sisgen_user", $user, $validade, "/", "", false, true);

    }

    private static function forget(){

        $validade = time() - 3600;

        setcookie("sisgen_user", "", $validade, "/", "", false, true);
    }


    public static function sair()
    {
        self::forget();
        
        unset($_SESSION["usuario_logado"]);

        parent::isProtected();
    }

    public static function getNameOfUser()
    {

        return $_SESSION['usuario_logado']['nome'];
    }
}