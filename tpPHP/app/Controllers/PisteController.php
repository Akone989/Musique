<?php
namespace Controllers;

use Models\PisteModel;
use Util\View;

class PisteController{

    private $model;

    public function __construct() {
        $this->model = new Piste();
    }

    public static function create(){

        $pModel = new PisteModel;
        $view = new View;

        $vue= false;
        $nb = 3;
        for ($i = 1; $i <= $nb; $i++) {
            if (!empty($_POST['titre' . $i]) && !empty($_POST['durée' . $i]) && !empty($_POST['emplacement' . $i]) && !empty($_POST['num' . $i])) {
                if ($_POST['num' . $i] >= 1 && $_POST['num' . $i] <= $nbd) {
                    $taille = $_POST["titre".$i];
                    $duree = $_POST["durée".$i];
                    $emplacement = $_POST['emplacement'];
                    $num = $_POST['num'];
                    $view->render("test.view  ");

                } else {
                    if (!$vue) {
                        $view->render("pistes.view");
                        $vue = true;
                    }
                }

            } else {
                if (!$vue) {
                    $view->render("pistes.view");
                    $vue = true;
                }
            }
        }
    }

}