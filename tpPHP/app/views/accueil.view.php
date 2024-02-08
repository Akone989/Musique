<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des objets</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Liste des objets</h2>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom Album</th>
        <th>Date de Sortie</th>
        <th>Support</th>
        <th>Valide</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($objets as $objet): ?>
        <tr>
            <td><?php echo $objet->getIdO(); ?></td>
            <td><?php echo $objet->getNomAlbum(); ?></td>
            <td><?php echo $objet->getDateSortie(); ?></td>
            <td><?php echo $objet->getSupport(); ?></td>
            <td><?php echo $objet->getValide(); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>