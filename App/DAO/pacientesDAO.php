<?php

namespace App\DAO;

class PacientesDAO extends DAO
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

        $stmt = $this->conexao->prepare("SELECT * FROM tbpacientes WHERE idPaciente = ?");
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchObject();
    }
    /**
     *  Retorna todos os registros da tbexames
     */

    public function getAllRows()
    {
        $stmt = $this->conexao->prepare("SELECT * FROM tbpacientes");
        $stmt->execute();

        $arr_pacientes = array();

        while ($e = $stmt->fetchObject())
            $arr_pacientes[] = $e;


        return $arr_pacientes;
    }

    /**
     * Método que insere um categoria no MySQL
     */

    public function insert($dados_pacientes)
    {

        $sql = "INSERT INTO tbpacientes 
                            (nomePaciente, id_plano, cartaoPaciente) 
                            VALUES 
                            (?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $dados_pacientes['nomePaciente']);
        $stmt->bindValue(2, $dados_pacientes['id_plano']);
        $stmt->bindValue(3, $dados_pacientes['cartaoPaciente']);
        $stmt->execute();
    }
    /**
     * Atualiza um registro na tbpacientes
     */
    public function update($dados_pacientes)
    {
        $sql = "UPDATE tbpacientes 
                SET nomePaciente = ?, id_plano = ?, cartaoPaciente = ? 
                WHERE idPaciente = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $dados_pacientes['nomePaciente']);
        $stmt->bindValue(2, $dados_pacientes['id_plano']);
        $stmt->bindValue(3, $dados_pacientes['cartaoPaciente']);
        $stmt->bindValue(4, $dados_pacientes['idPaciente']);
        $stmt->execute();
    }   
    /**
     * Remove um registro da tbpaciente
     */
    public function delete($id)
    {
        $sql = "DELETE FROM tbpacientes WHERE idPaciente = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}