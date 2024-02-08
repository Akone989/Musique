<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <title>Ajout</title>
        </head>
        <body>
        <?php //require_once 'menu.php';?>
        <div class="login-form">
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'artiste':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> artiste introuvable !
                                <a href="artiste/create"><h5> Ajouter l'artiste</h5></a>
                            </div>
                        <?php
                        break;

                        case 'objet':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> l'objet existe déjà !
                            </div>
                        <?php
                        break;

                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> votre demande d'ajout à été enregistrée !
                                
                            </div>
                        <?php
                        break;

                    }
                }
                ?>
            
            <form method="post">
                <h2 class="text-center">Ajout Nouvel Album</h2>       
                <div class="form-group">
                    <input type="text" name="nom_o" class="form-control" placeholder="Nom Album" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="format">Artiste : </label><br>
                    <select class="form-control" name="artiste" id="artiste">
                        <?php foreach($data1 as $artiste) : ?>
                            <option value="<?= $artiste->nom_artiste?>"><?php echo $artiste->nom_artiste; ?></option>
                        <?php endforeach ?>    
                    </select>
                </div>
                <div class="form-group">
                    <input type="date" name="date_sortie" class="form-control" placeholder="AAAA-MM-JJ" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="info_comp" class="form-control" placeholder="Infos complémentaires" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="format">Genre 1 : </label><br>
                    <select class="form-control" name="genre1" id="genre1">

                        <?php foreach($data as $genre) : ?>
                            <option value="<?= $genre->nom_genre?>"><?php echo $genre->nom_genre; ?></option>
                        <?php endforeach ?>
                         
                    </select>
                </div>
                <div class="form-group">
                    <label for="format">Genre 2 (facultatif) : </label><br>
                    <select class="form-control" name="genre2" id="genre2">
                        <option value=""> </option>
                        <?php foreach($data as $genre) : ?>
                            <option value="<?= $genre->nom_genre?>"><?php echo $genre->nom_genre; ?></option>
                        <?php endforeach ?>
                         
                    </select>
                </div>
                <div class="form-group">
                    <label for="format">Genre 3 (facultatif) : </label><br>
                    <select class="form-control" name="genre3" id="genre3">
                        <option value=""> </option>
                        <?php foreach($data as $genre) : ?>
                            <option value="<?= $genre->nom_genre?>"><?php echo $genre->nom_genre; ?></option>
                        <?php endforeach ?>
                         
                    </select>
                </div>
                <div class="form-group">
                    <label for="format">Support :</label><br>
                    <select  class="form-control" name="support" id="support">
                        <option value="CD">CD</option>
                        <option value="casette">Cassette</option>
                        <option value="vinyle">Vinyle</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="format">Format (uniquement si support = vinyle) : </label><br>
                    <label for="format">taille rpm </label><br>
                    <select class="form-control" name="format" id="format">
                        <option value=""> </option>
                        <?php foreach($data2 as $format) : ?>
                            <option value="<?= $format->id_f?>"><?php echo $format->taille. ' '. $format->rpm; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="nb" class="form-control" placeholder="Nombre de pistes" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
                </div>   
            </form>
            </container>
        </div>
        <style>
            .login-form {
                width: 340px;
                margin: 50px auto;
                
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
                border: 6px solid #6aa84f;
                border-radius: 10px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }
        </style>
        </body>
</html>
