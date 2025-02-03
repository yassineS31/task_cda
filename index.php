<?php

include './vendor/autoload.php';
include './env.php';
include './controller/accountController.php';
include './utils/connexion.php';
include './vue/header.php';
// include 'controller/categorieController.php';
include './vue/footer.php';
$bdd = connexion();
ajouterUtilisateur($bdd);
// ajouterCategory($bdd);

