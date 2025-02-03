<?php
function addTask($bdd, $firstname,$lastname,$email,$password){
    //Requête
    $requete = "INSERT INTO account(firstname,lastname,email,password) VALUES(?,?,?,?)";
    try {
        //Préparation de la requête
        $req = $bdd->prepare($requete);
        //Associer les paramètres (?)
        $req->bindParam(1,$firstname, PDO::PARAM_STR);
        $req->bindParam(2,$lastname, PDO::PARAM_STR);
        $req->bindParam(3,$email, PDO::PARAM_STR);
        $req->bindParam(4,$password, PDO::PARAM_STR);
        //Exécuter la requête
        $req->execute();
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}


function deleteAccount($bdd, $id){
    //Requête
    $requete = "DELETE FROM account WHERE id_account = ?";
    try {
        //Préparation de la requête
        $req = $bdd->prepare($requete);
        //Associer les paramètres (?)
        $req->bindParam(1,$id, PDO::PARAM_INT);
        //Exécuter la requête
        $req->execute();
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}


// Update


function updateAccount($bdd, $firstname,$lastname,$email,$password){
    //Requête
    $requete = "UPDATE account SET firstname= ?,lastname=?,email =?, password= ? WHERE id_account=?";
    try {
        //Préparation de la requête
        $req = $bdd->prepare($requete);
        //Associer les paramètres (?)
        $req->bindParam(1,$firstname, PDO::PARAM_STR);
        $req->bindParam(2,$lastname, PDO::PARAM_STR);
        $req->bindParam(3,$email, PDO::PARAM_STR);
        $req->bindParam(4,$password, PDO::PARAM_STR);
        //Exécuter la requête
        $req->execute();
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}


function getAllAccount($bdd){
    //Requête
    $requete = "SELECT * FROM account";
    try {
        //Préparation de la requête
        $req = $bdd->prepare($requete);
        //Exécuter la requête
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}

?>
