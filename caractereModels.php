<?php

namespace App\Models;

require_once 'Database.php';
require_once 'Models/caractere.php';

use App\Database;

use PDO;

class BookModel{
    private $connection;

    public function __construct(){
        $this->connection = new Database();
    }
    public function getAll(){
        $query = $this->connection->getPdo()->prepare("SELECT id,name FROM caractere");
        var_dump($query->execute());
        var_dump($query->fetchAll(PDO::FETCH_CLASS, "App\Models\Caractere"));
        return null;
    }
}