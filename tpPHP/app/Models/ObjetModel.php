<?php
namespace Models;

use PDO;
use PDOException;
use Entity\Objet;
use Database\Database;

class ObjetModel
{
    public function getObjet()
    {
        try {
            $stmt = Model::getPdo()->query("SELECT * FROM Objet");

            $objets = [];

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $objet = new Objet(
                    $row['id_o'],
                    $row['nom_album'],
                    $row['date_sortie'],
                    $row['support'],
                    $row['info_comp'],
                    $row['valide']
                );
                $objets[] = $objet;
            }

            return $objets;
        } catch (PDOException $e) {
            // Gérer les erreurs de requête
            echo "Erreur de requête : " . $e->getMessage();
            die();
        }
    }

    public function checkObjet($nomObjet,$support){
        $check_objet= Model::getPdo()->prepare('SELECT id_o  FROM Objet WHERE nom_album = :objet AND support = :sup');
        $check_objet->execute([
            'objet' => $nomObjet,
            'sup' => $support]);


    }
    public function insertObjet($genre,$nomObjet,$support,$info)
    {
        $insertOB = Model::getPdo()->prepare('INSERT INTO Objet(id_o, nom_album, date_sortie, support, info_comp, valide) VALUES(auto_increment, :objet, :date_sortie, :support, :info_comp, :valide)');
        $insertOB->execute([
            'nom_album' => $genre,
            'date_sortie' => $nomObjet,
            'support' => $support,
            'info_comp' => $info,
            'valide' => 0
        ]);

    }
}

