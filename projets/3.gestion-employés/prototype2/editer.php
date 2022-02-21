<?php

include 'connection.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM Employes WHERE Id= $id";
    $result = mysqli_query($connection, $sql);
    // Récupère une ligne de résultat sous forme de tableau associatif
    $employe = mysqli_fetch_assoc($result);
}

if(isset($_POST['modifier'])){

    $nom = $_POST['Nom'];
    $prenom = $_POST['Prenom'];
    $dateNaissance = $_POST['DateNaissance'];
    
    // Requête SQL
    $sql = "UPDATE employes SET 
                Nom='$nom', Prenom='$prenom', DateNaissance='$dateNaissance'
                WHERE Id= $id";

    //  
    mysqli_query($connection, $sql);

    //
    if(mysqli_error($connection)){
        echo 'Erreur' . mysqli_errno($connection);
    } else {
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modifier : </title>
</head>
<body>

<h1>Modification de l'employé : <?=$employe['Nom']  ?></h1>
<form method="post" action="">
    <div>
        <label for="Nom">Nom</label>
        <input type="text" required="required" 
        id="Nom" name="Nom"  placeholder="Nom" 
        value=<?php echo $employe['Nom']?> >
    </div>
    <div>
        <label for="Prenom">Prénom</label>
        <input type="text" required="required" 
        id="Prenom" name="Prenom" placeholder="Prénom"
        value=<?php echo $employe['Prenom']?>>
    </div>
    <div>
        <label for="DateNaissance">Date de naissance</label>
        <input type="date" required="required"  
        id="DateNaissance"  name="DateNaissance" placeholder="Date de naissance"
        value=<?php echo $employe['DateNaissance']?>>
    </div>
    <div>
        <input name="modifier" type="submit" value="Modifier">
        <a href="index.php">Annuler</a>
    </div>
</form>
</body>
</html>