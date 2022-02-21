<?php

$employe;

if(isset($_GET['id'])){
    $employes = json_decode(file_get_contents('employes.json'));
    foreach($employes as $objet){
        if($objet[0]== $_GET['id']){
            $employe = $objet;
            break;
        }
    }
}

if(isset($_POST['modifier'])){
    $id = $_POST['Id'];
    $nom = $_POST['Nom'];
    $prenom = $_POST['Prenom'];
    $dateNaissance = $_POST['DateNaissance'];
    
    // 
    $employe_file = file_get_contents('employes.json');
    $employes = json_decode($employe_file, true);
  
    for ($i=0; $i < count($employes)  ; $i++) { 
        if($employes[$i][0]== $id){
            $employe = $employes[$i];
            $employe[1] = $nom;
            $employe[2] = $prenom;
            $employe[3] = $dateNaissance;
            $employes[$i] = $employe;
            file_put_contents('employes.json', json_encode($employes));
            break;
        }
    }
     

    header('Location: index.php');
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

<h1>Modification de l'employé : <?=$employe['1']  ?></h1>
<form method="post" action="">
    <input type="text" id="Id" name="Id" value=<?php echo $employe[0]?> >

    <div>
        <label for="Nom">Nom</label>
        <input type="text" required="required" 
        id="Nom" name="Nom"  placeholder="Nom" 
        value=<?php echo $employe[1]?> >
    </div>
    <div>
        <label for="Prenom">Prénom</label>
        <input type="text" required="required" 
        id="Prenom" name="Prenom" placeholder="Prénom"
        value=<?php echo $employe[2]?>>
    </div>
    <div>
        <label for="DateNaissance">Date de naissance</label>
        <input type="date" required="required"  
        id="DateNaissance"  name="DateNaissance" placeholder="Date de naissance"
        value=<?php echo $employe[3]?>>
    </div>
    <div>
        <input name="modifier" type="submit" value="Modifier">
        <a href="index.php">Annuler</a>
    </div>
</form>
</body>
</html>