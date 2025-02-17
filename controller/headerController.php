<?php
function renderHeader(){
    $nav = '';
    if(isset($_SESSION['id'])){
        // Ancienne version :

    //    $nav='<a href="/task/moncompte">Mon Compte</a>
    //         <a href="/task/deconnexion">Se Déconnecter</a>';
    $nav ="";
    // Nouvelle version buffering : 
    //1) Activer la mise en mémoire tampon
    ob_start();
    echo '<a href="/task/moncompte">Mon Compte</a>
          <a href="/task/ajoutercategorie">Ajouter catégorie</a>
          <a href="/task/deconnexion">Se Déconnecter</a>;';
          $nav = ob_get_clean();
    }
    include './vue/header.php';
}