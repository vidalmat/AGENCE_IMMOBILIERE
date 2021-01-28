<?php

namespace Modeles;
use PDO;


abstract class DbConnect implements Crud {

    protected $pdo;
    

public function __construct() {
    $this->pdo = new PDO(DATABASE, LOGIN, PASSWORD);

    }

   

}





?>