<?php


namespace Models;
use Models\Model;
use Database\Database;

//require_once("Model.php");
class UtilisateurModel extends Model
{


    public static function checkEmail($email)
    {
        $checkmail = Model::getpdo()->prepare('SELECT COUNT(*) fROM utilisateur WHERE email=:email');
        $checkmail->execute(['email' => $email]);
        return $checkmail->fetchColumn();
    }

    public static function createUser($pseudo, $email, $password)
    {
        $insert = Model::getpdo()->prepare('INSERT INTO utilisateur(pseudo, email, password, public, statut, date_inscription) VALUES(:pseudo, :email, :password, :public, :statut, current_timestamp)');
        $insert->execute(array(
            'pseudo' => $pseudo,
            'email' => $email,
            'password' => $password,
            'public' => 0,
            'statut' => 0,
        ));


    }

    public static function checkAuthenticate($email, $password) {
        $check = Model::getpdo()->prepare('SELECT COUNT(*) FROM utilisateur WHERE email=:email and password=:password');
        $check->execute(['email' => $email, 'password' => $password]);
        return $check->fetchColumn();
    }

    public static function updatePublic(){
        $reqUser = Model::getPdo()->prepare('SELECT public FROM utilisateur  WHERE email = :mail');
        $reqUser->execute(['mail' => $_SESSION['user']]);
        $dataUser = $reqUser->fetch();

        if($dataUser['public']==0){
            // Le compte de l’utilisateur est mis sur privé
            $prive = Model::getPdo()->prepare('UPDATE utilisateur SET public = 1 WHERE email = :mail');
            $prive->execute(['mail' => $_SESSION['user']]);
            $datapr = $prive->fetch();
        }
        else{
            // Le compte de l’utilisateur est mis sur public
            $public = Model::getPdo()->prepare('UPDATE utilisateur SET public = 0 WHERE email= :mail');
            $public->execute(['mail' => $_SESSION['user']]);
            $datapu = $public->fetch();
        }

    }
}

