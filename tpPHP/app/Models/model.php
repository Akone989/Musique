<?php

namespace models;

class Model {

    private $host = "localhost";
    private $port = "8889";
    private $dbname= "php";
    private $user= "php";
    private $mdp= "php";
    private $charset = "utf8";
    protected $pdo;

    public function __construct(){
        try {
            $this->pdo=new \PDO('mysql:host='.$this->host. ';dbname='. $this->dbname, 'root');
        } catch (\PDOException $e){
            echo " Erreur de connexion";
        }



}

    public function render($nom,$param=[])
    {
        extract($param);
        include("./views/$nom.php");

    }





    

}