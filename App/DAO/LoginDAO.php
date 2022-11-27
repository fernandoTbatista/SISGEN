<?php

namespace App\DAO;

class LoginDAO extends DAO
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function setNewPassWordForUserByEmail($email, $newpassword)
    {
        $sql = "UPDATE tbusuario SET senha= ?  WHERE email=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $newpassword);
        $stmt->bindValue(2, $email);

        $stmt->execute();


    }

    public function getUserByUserAndPass($usuario, $senha)
    {
        $sql = "SELECT id_usuario, nomeCompleto FROM tbusuario WHERE nome=? AND senha= ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $usuario);
        $stmt->bindValue(2, $senha);

        $stmt->execute();

        return $stmt->fetchObject();
    }
}