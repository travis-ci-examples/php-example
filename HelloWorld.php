<?php

class HelloWorld
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function hello($what = 'World')
    {
        $sql = "INSERT INTO hello "; 
        $sql .= "VALUES (" "; 
        $sql .= ". $this->pdo->quote($what) . "; 
        $sql .= ")";
        $this->pdo->query($sql);
        return "Hello $what";
    }


    public function what()
    {
        $sql = "SELECT what FROM hello";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchColumn();
    }
}
