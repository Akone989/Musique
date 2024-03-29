<?php

namespace Controllers;

use Database\Database;
use Models\ObjetModel;
use Models\Model;
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

    public static function create(){  
        $viewLog = new View;
        $view = $viewLog->render('Objet/create', Model::genre(), Model::nomArtiste(), Model::format());
    }

    public static function createPost(){

        // VERIIFIER SI CHAMPS NON VIDE !!!

        
            $nom = Controller::sanitize('nom_o');
            $info = Controller::sanitize('info_comp');

            $objModel = new ObjetModel(); 
            $objModel->insertion($nom, $_POST['date_sortie'], $_POST['support'], $info);
            $objModel->contribue($_POST['artiste'], $nom, $_POST['date_sortie'], $_POST['support']);
            $objModel->associe($_POST['genre1'], $nom, $_POST['date_sortie'], $_POST['support']);

            if(!empty($_POST['genre2'])){
                $objModel->associe($_POST['genre2'], $nom, $_POST['date_sortie'], $_POST['support']);
            }
            if(!empty($_POST['genre3'])){
                $objModel->associe($_POST['genre3'], $nom, $_POST['date_sortie'], $_POST['support']);
            }

            if($_POST['support'] == 'vinyle' && !empty($_POST['format'])){
                $objModel->caracterise($_POST['nom_o'], $_POST['date_sortie'], $_POST['support'], $_POST['format']);
            } else if($_POST['support'] != 'vinyle' && !empty($_POST['format'])){
                header('Location: /web/objet/create?mesErr=true');
            }

            header('Location: /web/piste/create?nom_o='.$nom.'&date_sortie='.$_POST['date_sortie'].'&support='.$_POST['support']);

    }

    public function createObjet() {
        $view= new View();
        $model=new UtilisateurModel();
        if (!empty($_POST['couv']) && !empty($_POST['type']) && !empty($_POST['title']) && !empty($_POST['artist']) && !empty($_POST['nbd']) && !empty($_POST['nb']) && !empty($_POST['date'])) {
            $date = strtotime($_POST["date"]);
            $currentDate = time();
            $couv = $_POST['couv'];
            $type = $_POST['type'];
            $title = $_POST['title'];
            $artist = $_POST['artist'];
            $nbd = $_POST['nbd'];
            $nb = $_POST['nb'];

            if ($currentDate < $date) {
                $message = "la date doit être inférieure à la date d'aujourd'hui";
                $view->render("Objet/create",['message' => $message]);

            } else {
                $view->render("pistes.view",["couv"=>$couv,"title"=>$title,"artist"=>$artist,"type"=>$type,"nbd"=>$nbd,"nb"=>$nb]);
            }
        } else {
            $view->render("ajout.view");
        }
    }

    
}
