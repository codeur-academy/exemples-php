<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $employes = json_decode(file_get_contents('employes.json'));
        for($i = 0; $i < count($employes); ++$i){
            if($employes[$i][0]== $id){
                unset($employes[$i]);
                file_put_contents("employes.json",json_encode($employes));
                break;
            }
        }

        header('Location: index.php');
    }
?>