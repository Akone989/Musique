<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>create</title>
</head>
<body>

<style>

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        
        background-image: url("../img.png");
        background-size: 100%;
    }
    #form{


        display: flex;
        flex-direction: column;


    }
    #f{

        border: 6px solid #6aa84f;
        border-radius: 10px;
        padding: 20px;
        width: 400px;
        background-color: #fff;

    }




</style>


<container id="f">
    <H2>Créer un compte</H2>

    <form method="post" id="form">
    <div class="form-group">
        <label>Email :</label>
        <input type="email" class="form-control" name="Email">
    </div>
    <div class="form-group">
        <label >Mot de passe:</label>
        <input type="password" class="form-control" name="Mdp" >
    </div>
    <div class="form-group">
        <label >Confirmer le mot de passe:</label>
        <input type="password" class="form-control" name="Mdp_retype" >
    </div>
    <div class="form-group">
        <label >Pseudo:</label>
        <input type="text" class="form-control" name="Pseudo">
    </div>
    <button type="submit" class="btn btn-secondary"> Envoyer</button>
    <a href="authentificate.view.php">se connecter</a>
</form>
</container>
</body>
</html>
