<?php
include './vendor/autoload.php';
include './env.php';
include './utils/connexion.php';
$nom = "test";
try {
    $bdd = connexion();
    $requete = "INSERT INTO category(name) VALUE(?)";
    $req = $bdd->prepare($requete);
    $req->bindParam(1,$nom, PDO::PARAM_STR);
    $req->execute();
} catch (\Exception $e) {
    echo $e->getMessage();
}


