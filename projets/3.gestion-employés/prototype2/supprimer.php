<?php
include "connection.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM Employes WHERE Id= '$id'";
    mysqli_query($connection, $sql);
    header('Location: index.php');
}
?>