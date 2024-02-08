<?php

namespace Models;
require_once("Model.php");
use Models\Model;
use Database\Database;

class PisteModel extends Model{

    public function checkPiste($titre){
        $checkpiste = Model::getPdo()->prepare('SELECT COUNT(*) fROM piste WHERE titre=:titre');
        $checkpiste->execute(['titre' => $titre]);
        return $checkpiste->fetchColumn();
    }

    public function insertPiste($titre,$duree,$emplacement,$num){
        $create= Model::getPdo()->prepare('INSERT INTO piste(titre, duree, emplacement,num) VALUES(:titre, :duree, :emplacement,:num)');
        $create->execute(array(
            "titre"=>$titre,
            "duree"=>$duree,
            "emplacement"=>$emplacement,
            "num"=>$num
        ));
    }



}