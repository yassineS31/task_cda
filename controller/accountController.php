<?php 
include './model/account.php';


function ajouterUtilisateur(PDO $bdd) {
    $message ='';
     if(isset($_POST["submit"])) {
        if(isset($_POST['firstname'] ) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password'])){
            $message ="test";
            $firstname =sanitize($_POST['firstname']);
            $lastname =sanitize($_POST['lasttname']);
            $email =sanitize($_POST['email']);
            $password =sanitize($_POST['password']);
            $password = password_hash($password,PASSWORD_BCRYPT);
            $account = [$firstname,$lastname,$email,$password];
            // vérifier si l'utilisateur existe déjà : 
                if(!getAccountByEmail($bdd,$email)){
                    //Ajouter l'utilisateur :
                    addAccount($bdd,$account); 
                   $message = "L'utilisateur a été ajouté";
                }else{
                    $message= "L'Utilisateur existe déjà.";
                }
        }
    }else{
        $message = "Veillez remplir correctement les champs.";
    }
   
    include './vue/account.php';
}

?>