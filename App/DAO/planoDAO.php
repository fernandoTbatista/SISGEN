<?php

namespace App\DAO;

class PlanoDAO extends DAO
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

        $stmt = $this->conexao->prepare("SELECT * FROM tbplano WHERE idPlano = ?");
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchObject();
    }
    /**
     *  Retorna todos os registros da tbexames
     */

    public function getAllRows()
    {
        $stmt = $this->conexao->prepare("SELECT * FROM tbplano ORDER BY nomePlano");
        $stmt->execute();

        $arr_planos = array();

        while ($e = $stmt->fetchObject())
            $arr_planos[] = $e;


        return $arr_planos;
    }

    /**
     * Método que insere um categoria no MySQL
     */

    public function insert($dados_planos)
    {

        $sql = "INSERT INTO tbplano (nomePlano) VALUES (?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $dados_planos['nomePlano']);
        $stmt->execute();
    }
    /**
     * Atualiza um registro na tbpacientes
     */
    public function update($dados_planos)
    {
        $sql = "UPDATE tbplano SET nomePlano =? WHERE idPlano = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $dados_planos['nomePlano']);
        $stmt->bindValue(2, $dados_planos['idPlano']);
        $stmt->execute();
    }
    /**
     * Remove um registro da tbpaciente
     */
    public function delete($id)
    {
        $sql = "DELETE FROM tbplano WHERE idPlano = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}