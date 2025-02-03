<?php

include './vendor/autoload.php';
include './env.php';
include './utils/connexion.php';

include 'controller/categorieController.php';
$bdd = connexion();
ajouterCategory($bdd);

