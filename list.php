<?php
require 'connect.php';
$products = $bdd->prepare("SELECT * FROM livres");
$products->execute();
$products = $products->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <table class="table teable-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Synopsis</th>
                <th>Auteur</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            foreach ($products as $prod) {?>
            <tr>
                <td><?= $prod['id']?></td>
                <td><?= $prod['nom']?></td>
                <td><?= $prod['synopsis']?></td>
                <td><?= $prod['auteur']?></td>
                <td><?= $prod['dp']?></td>
            </tr>
            <?php } ?>


        </tbody>
    </table>

</body>
</html>