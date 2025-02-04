<?php
function renderHeader(){
    $nav = '';
    if(isset($_SESSION['id'])){
       $nav='<a href="/task/moncompte">Mon Compte</a>
            <a href="/task/deconnexion">Se Déconnecter</a>';
    }
    include './vue/header.php';
}