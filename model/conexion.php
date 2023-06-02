<?php

class Conexion
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $database = "pokemonnoche";
    private $conPDO; // Objeto de la clase PDO

    public function __construct()
    {
        try {
            $this->conPDO = new PDO("mysql:dbname=$this->database;host=$this->host", $this->user, $this->pass);

            $this->conPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error" . $e->getCode();
        }
    }

    /**
     * Get the value of conPDO
     */
    public function getConPDO()
    {
        return $this->conPDO;
    }
}
