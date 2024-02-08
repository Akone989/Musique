<?php
namespace Controllers;

use models\Piste;
use Util\View;

class PisteController{

    private $model;

    public function __construct() {
        $this->model = new Piste();
    }

    public function createPiste(){

        $pModel = new PisteModel;
        $view = new View;

        $vue= false;

        for ($i = 1; $i <= $nbd; $i++) {
            if (!empty($_POST['RPM' . $i]) && !empty($_POST['taille' . $i])) {
                $rpm = $_POST['RPM'. $i];
                $taille = $_POST['taille'. $i];
            }
            else{
                if (!$vue) {
                    $view->render("pistes.view");
                    $vue = true;
                }
            }
        }

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