<?php
    // Trouver tous les employés depuis la base de données 
    include 'connection.php';
    $sql = 'SELECT Id, Nom, Prenom, DateNaissance FROM Employes';
    $query = mysqli_query($connection ,$sql);
    $employes = mysqli_fetch_all($query, MYSQLI_ASSOC);
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
                <td><?= $employe['Nom']?></td>
                <td><?= $employe['Prenom']?></td>
                <td><?= $employe['DateNaissance']?></td>
                <td>
                    <a href="editer.php?id=<?php echo $employe['Id'] ?>">Éditer</a>
                    <a href="supprimer.php?id=<?php echo $employe['Id'] ?>">Supprime</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>