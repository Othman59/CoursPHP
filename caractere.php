<?php

namespace App\Models;

class caractere
{
    private $id;
    private $name;
    private $pdo;

    public function __construct(){

    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAll(){
        $query = $this->pdo->prepare("SELECT id,name FROM caractere");
       var_dump($query->execute());
       var_dump($query->fetchAll(PDO::FETCH_CLASS, "App\Models\caractere"));
        return null;
    }
}