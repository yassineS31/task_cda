<?php
//Activer la session
session_start();

//include './vendor/autoload.php';
include './env.php';
include './utils/connexion.php';
include './utils/utils.php';


$bdd = connexion();


//Récupérer le path entrer par l'utilisateur
$url = parse_url($_SERVER['REQUEST_URI']);

//Test le path pour savoir in on a une route, sinon on retourne l'élément racine /
$path = isset($url['path']) ? $url['path'] : '/';

//Mise en place du Routeur et des routes

switch($path){
    //Route pour l'accueil
    case '/task/':
        // var_dump($_SESSION);
        include './controller/headerController.php';
        include 'controller/accountController.php';
        renderHeader();
        renderAccounts($bdd);
        break;
    
    //Route pour pour la page mon compte
    case '/task/moncompte' :
        include './controller/headerController.php';
        include './controller/myAccountController.php';
        renderHeader();
        renderMyAccount();
        break;
    //Route pour pour la page de deconnexion 
    case '/task/deconnexion' :
        include './controller/decoController.php';
        break;

    //Si aucune route ne correspond : Page d'Erreur 404
    default :
        include './controller/errorController.php';
        render404();
        
}


include './vue/footer.php';

