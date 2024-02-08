<?php

namespace models;
require_once("Model.php");
use models\Model;

class PisteModel extends Model{

    public function checkPiste($titre){
        $checkpiste = $this->pdo->prepare('SELECT COUNT(*) fROM piste WHERE titre=:titre');
        $checkpiste->execute(['titre' => $titre]);
        return $checkpiste->fetchColumn();
    }

    public function insertPiste($titre,$duree,$emplacement,$num){
        $create=$this->pdo->prepare('INSERT INTO piste(titre, duree, emplacement,num) VALUES(:titre, :duree, :emplacement,:num)');
        $create->execute(array(
            "titre"=>$titre,
            "duree"=>$duree,
            "emplacement"=>$emplacement,
            "num"=>$num
        ));
    }



}