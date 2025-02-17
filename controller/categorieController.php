<?php

include 'model/category.php';


function ajouterCategory(PDO $bdd) {
     $message = "";
     if(isset($_POST["submit"])) {
        if(!empty($_POST["name"])) {
            $categorie = getCategoryByName($bdd,$_POST["name"]);
            if(!$categorie) {
                 addCategory($bdd, $_POST["name"]);
                $message = "la catégorie a été ajouté";
            }
            else {
                $message = "La catégorie existe déja en BDD";
            } 
        }
    }
    return'';
}


function displayCategories(PDO $bdd){
    //Récupération de la liste des utilisateurs
    $data = getAllCategory( $bdd);

    $categoryList = "";
    ob_start();
     
    foreach($data as $category){
        $categoryList = $categoryList."<li><h2>".$category["name"] ."</h2></li>";
    }
    return $categoryList; 
    
    ob_get_clean();
};



function renderCategories(PDO $bdd){
    $message = ajouterCategory($bdd);
    $categoryList = displayCategories($bdd);
    include 'vue/addCategory.php';
}