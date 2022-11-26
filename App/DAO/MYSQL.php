<?php

namespace App\DAO;

use \PDO;

class MySQL extends PDO
{

    private $host    = "localhost";
    private $usuario = "root";
    private $senha   = "";
    private $db      = "login";

    public function __construct()

    {
        //Data Source name
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db;

        // PHP Data Object
        return parent::__construct($dsn, $this->usuario, $this->senha);

        return $conexao;

    }
}