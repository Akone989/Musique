<?php

namespace Controllers;

use Models\ObjetModel;
use Database\Database;
use Util\View;

class ObjetController{
    public static function list()
    {
        // Créer une instance de la classe Database
        $db = new Database();

        // Passez cette instance à ObjetModel lors de son instanciation
        $oModel = new ObjetModel($db);
        $objets = $oModel->getObjet();

        $view = new View;

        $view->render('accueil.view', ['objets' => $objets]);
    }
}
