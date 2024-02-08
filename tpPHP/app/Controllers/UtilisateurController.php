<?php
namespace Controllers;
use models\Utilisateur;

class UtilisateurController
{

    private $model;

    public function __construct()
    {
        $this->model = new UtilisateurModel();
    }

    public function register()
    {

        if (!empty($_POST["Email"]) &&
            !empty($_POST["Pseudo"]) &&
            !empty($_POST["Mdp"]) &&
            !empty($_POST["Mdp_retype"])) {
            $pseudo = htmlspecialchars($_POST['Pseudo']);
            $email = htmlspecialchars($_POST['Email']);
            $password = htmlspecialchars($_POST['Mdp']);
            $password_retype = htmlspecialchars($_POST['Mdp_retype']);
            if ($password === $password_retype) {
                if ($this->model->checkEmail($email) == 0) {
                    $this->model->createUser($pseudo, $email, $password);
                    $message = 'inscription réussie';
                    $this->model->render("authenticate.view",['message' => $message]);
                } else {
                    $message = 'email déjà utilisé';
                    $this->model->render("create.view",['message' => $message]);
                }

            } else {
                $message = 'le mot de passe ne correspond pas';
                $this->model->render("create.view", ['message' => $message]);
            }

        } else {
            $message = '';
            $this->model->render("create.view", ['message' => $message]);
        }


    }

    public function authenticate()
    {
        if (!empty($_POST["email"]) && !empty($_POST["mdp"])) {
            $email = htmlspecialchars($_POST['Email']);
            $password = htmlspecialchars($_POST['Mdp']);
            if ($this->model->checkAuthenticate($email, $password) == 1) {
                echo 'connexion réussie';

            } else {
                $message= 'compte inconnu';
                $this->model->render("authenticate.view",['message' => $message]);
            }
        } else {
            $this->model->render("authenticate.view");
        }
    }

}