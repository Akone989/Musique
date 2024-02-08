<?php
namespace Controllers;
use models\UtilisateurModel;
use util\View;

class UtilisateurController
{

    

    public function register()
    {
        $view= new View();
        $model=new UtilisateurModel();
        if (!empty($_POST["Email"]) &&
            !empty($_POST["Pseudo"]) &&
            !empty($_POST["Mdp"]) &&
            !empty($_POST["Mdp_retype"])) {
            $pseudo = htmlspecialchars($_POST['Pseudo']);
            $email = htmlspecialchars($_POST['Email']);
            $password = htmlspecialchars($_POST['Mdp']);
            $password_retype = htmlspecialchars($_POST['Mdp_retype']);
            if ($password === $password_retype) {
                if ($model->checkEmail($email) == 0) {
                    $model->createUser($pseudo, $email, $password);
                    $message = 'inscription réussie';
                    $view->render("authenticate.view",['message' => $message]);
                } else {
                    $message = 'email déjà utilisé';
                    $view->render("create.view",['message' => $message]);
                }

            } else {
                $message = 'le mot de passe ne correspond pas';
                $view->render("create.view", ['message' => $message]);
            }

        } else {
            $message = '';
            $view->render("create.view", ['message' => $message]);
        }


    }

    public function authenticate()
    {
        $model = new UtilisateurModel();
        $view= new View();
        if (!empty($_POST["email"]) && !empty($_POST["mdp"])) {
            $email = htmlspecialchars($_POST['Email']);
            $password = htmlspecialchars($_POST['Mdp']);
            if ($model->checkAuthenticate($email, $password) == 1) {
                echo 'connexion réussie';

            } else {
                $message= 'compte inconnu';
                $view->render("authenticate.view",['message' => $message]);
            }
        } else {
            $view->render("authenticate.view");
        }
    }

}