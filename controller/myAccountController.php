<?php

include './env.php';
include './utils/connexion.php';
include './utils/utils.php';

if(!isset($_SESSION['lastname'])){
    //On redirige si personne n'est connecté
    header('location:index.php');
    exit;
}else{
    header('location:viewMyAccount.php');
}

?>