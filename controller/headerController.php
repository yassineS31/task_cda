<?php

include './env.php';
include './utils/connexion.php';
include './utils/utils.php';
$myaccount = "";
$Log = "";
if(!isset($_SESSION['lastname'])){
    //On redirige si personne n'est connecté
    header('location:index.php');
    exit;
}else{
    $myaccount ="<a href='myAccount.php'>Mon compte</a>";
    $Log = "<a href='deco.php'>Déconnexion</a>";
}

include './vue/header.php';
?>