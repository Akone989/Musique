<?php

namespace Models;

use PDO;
use Database\Database;

abstract class Model {
    
    public static function getDB(){
        $connect  = new Database("Musique", "127.0.0.1", "8889", "root", "root");
        return $connect->getPDO();
    }

    public static function genre(){
        $req = Model::getDB()->prepare('SELECT * FROM Genre');
        $req->execute();
        return $req->fetchAll();
    }

    public static function nomArtiste(){
        $req1 = Model::getDB()->prepare('SELECT nom_artiste FROM Artiste');
        $req1->execute();
        return $req1->fetchAll();
    }

    public static function format(){
        $req2 = Model::getDB()->prepare('SELECT * FROM Format');
        $req2->execute();
        return $req2->fetchAll();
    }
      
}