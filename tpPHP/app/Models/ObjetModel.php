<?php

namespace Models;

use PDO;
use PDOException;
use Entity\Objet;
use Database\Database;

class ObjetModel
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getObjet()
    {
        try {
            // Utilisation de PDO sans spécifier de namespace
            $stmt = $this->db->getPdo()->query("SELECT * FROM Objet");

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
}
