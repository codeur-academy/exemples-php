<?php
    // Trouver tous les employés depuis le fichier JSON  
    $employesFile = file_get_contents('employes.json');
    $employes = json_decode($employesFile);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gestion des employés</title>
</head>
<body>
    <div>
        <a href="ajouter.php">Ajouter un employé</a>
        <table>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th></th>
            </tr>
            <?php
                    foreach($employes as $employe){
            ?>

            <tr>
                <td><?= $employe[1]?></td>
                <td><?= $employe[2]?></td>
                <td><?= $employe[3]?></td>
                <td>
                    <a href="editer.php?id=<?php echo $employe[0] ?>">Éditer</a>
                    <a href="supprimer.php?id=<?php echo $employe[0] ?>">Supprime</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>