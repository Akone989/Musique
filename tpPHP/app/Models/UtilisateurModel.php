<?php


namespace models;
use models\Model;
require_once("Model.php");
class UtilisateurModel extends Model
{


    public function checkEmail($email)
    {
        $checkmail = $this->pdo->prepare('SELECT COUNT(*) fROM utilisateur WHERE email=:email');
        $checkmail->execute(['email' => $email]);
        return $checkmail->fetchColumn();
    }

    public function createUser($pseudo, $email, $password)
    {
        $insert = $this->pdo->prepare('INSERT INTO utilisateur(pseudo, email, password, public, statut, date_inscription) VALUES(:pseudo, :email, :password, :public, :statut, current_timestamp)');
        $insert->execute(array(
            'pseudo' => $pseudo,
            'email' => $email,
            'password' => $password,
            'public' => 0,
            'statut' => 0,
        ));


    }

    public function checkAuthenticate($email, $password) {
        $check = $this->pdo->prepare('SELECT COUNT(*) FROM utilisateur WHERE email=:email and password=:password');
        $check->execute(['email' => $email, 'password' => $password]);
        return $check->fetchColumn();
    }

    public function updatePublic(){
        $reqUser = $this->pdo->prepare('SELECT public FROM utilisateur  WHERE email = :mail');
        $reqUser->execute(['mail' => $_SESSION['user']]);
        $dataUser = $reqUser->fetch();

        if($dataUser['public']==0){
            // Le compte de l’utilisateur est mis sur privé
            $prive = $this->pdo->prepare('UPDATE utilisateur SET public = 1 WHERE email = :mail');
            $prive->execute(['mail' => $_SESSION['user']]);
            $datapr = $prive->fetch();
        }
        else{
            // Le compte de l’utilisateur est mis sur public
            $public = $this->pdo->prepare('UPDATE utilisateur SET public = 0 WHERE email= :mail');
            $public->execute(['mail' => $_SESSION['user']]);
            $datapu = $public->fetch();
        }

    }
}

