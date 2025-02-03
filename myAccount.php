<?php
session_start();
if(!isset($_SESSION['lastname'])){
    //On redirige si personne n'est connecté
    header('location:index.php');
    exit;
}else{
    header('location:vue/viewMyAccount.php');
}


include './vue/footer.php';

?>


