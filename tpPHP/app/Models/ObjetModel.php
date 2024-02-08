<?php
namespace models;
require_once("Model.php");
use models\Model;
class ObjetModel extends Model {

    public function checkObjet($nomObjet,$support){
        $check_objet= $this->pdo->prepare('SELECT id_o  FROM Objet WHERE nom_album = :objet AND support = :sup');
        $check_objet->execute([
            'objet' => $nomObjet,
            'sup' => $support]);


    }
    public function insertObjet($genre,$nomObjet,$support,$info)
    {
        $insertOB = $this->pdo->prepare('INSERT INTO Objet(id_o, nom_album, date_sortie, support, info_comp, valide) VALUES(auto_increment, :objet, :date_sortie, :support, :info_comp, :valide)');
        $insertOB->execute([
            'nom_album' => $genre,
            'date_sortie' => $nomObjet,
            'support' => $support,
            'info_comp' => $info,
            'valide' => 0
        ]);

    }
}