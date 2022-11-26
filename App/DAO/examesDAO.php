<?php

namespace App\DAO;

class ExamesDAO extends DAO 
{
    public function __construct()
    {
        parent:: __construct();
    }
    /**
     * Retorna um registro especifico da tbexames
     */

    public function getById($id)
    {

        $stmt = $this->conexao->prepare("SELECT * FROM tbexames WHERE idExame = ?");
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchObject();
    }
    /**
     *  Retorna todos os registros da tbexames
     */

    public function getAllRows()
    {
        $stmt = $this->conexao->prepare("SELECT * FROM tbexames");
        $stmt->execute();

        $arr_exames = array();

        while ($e = $stmt->fetchObject())
            $arr_exames[] = $e;


        return $arr_exames;
    }

    /**
     * Método que insere um categoria no MySQL
     */

    public function insert($dados_exames)
    {

        $sql = "INSERT INTO tbexames (nomeExame, cidExame, descricaoExame, precoExame,tipoExame) VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $dados_exames['nomeExame']);
        $stmt->bindValue(2, $dados_exames['cidExame']);
        $stmt->bindValue(3, $dados_exames['descricaoExame']);
        $stmt->bindValue(4, $dados_exames['precoExame']);
        $stmt->bindValue(5, $dados_exames['tipoExame']);
        $stmt->execute();
    }
    /**
     * Atualiza um registro na tbexames
     */
    public function update($dados_exames)
    {
        $sql = "UPDATE tbexames SET nomeExame =?, cidExame=?, descricaoExame=?, precoExame=?,tipoExame=?  WHERE idExame = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $dados_exames['nomeExame']);
        $stmt->bindValue(2, $dados_exames['cidExame']);
        $stmt->bindValue(3, $dados_exames['descricaoExame']);
        $stmt->bindValue(4, $dados_exames['precoExame']);
        $stmt->bindValue(5, $dados_exames['tipoExame']);
        $stmt->bindValue(6, $dados_exames['idExame']);
        $stmt->execute();
    }
    /**
     * Remove um registro da tbexames
     */
    public function delete($id)
    {
        $sql = "DELETE FROM tbexames WHERE idExame = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}