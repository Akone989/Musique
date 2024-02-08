<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>musique</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

        }

        form {

            width: 100%;
            padding: 20px;
            justify-content: center;


            border-radius: 8px;

        }

        h1 {
            text-align: center;

        }

        label {
            display: block;
        }

        input, select, textarea {


            margin-bottom: 16px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        button {
            background-color: #6aa84f;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            border:none;
            cursor: pointer;

        }


    </style>


</head>
<body>

<form method="post">
    <container>
    <h1>Ajout des pistes</h1>
   <table class="table table-striped">
       <tr>
           <th>Titre</th>
           <th>Durée</th>
           <th>Emplacement</th>
           <th>N° disque</th>
       </tr>
       <tbody>
       <?php
        for($i=1;$i<=$nb;$i++){
            ?>
                <tr>

       <td><input type="text" name="titre<?php echo $i; ?>" id="titre"></td>
       <td><input type="text" name="durée<?php echo $i; ?>" id="durée"> </td>
       <td><input type="text" name="emplacement<?php echo $i; ?>" id="emplacement"></td>
       <td><input type="number" name="num<?php echo $i; ?>" id="num"></td>
                </tr>
       <?php
        }
       ?>
       </tbody>
   </table>
    <button type="submit">Envoyer</button>
    </container>
</form>
</body>
</html>
