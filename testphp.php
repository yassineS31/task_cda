<?php 

include "vendor/autoload.php";



// function resultat($a):void{
//     if($a>=0){
//         echo "$a est positif";
//     }else {
//         echo "$a est negatif";
//     }
// };


// resultat(15);
// echo "<br>";
// resultat(0);
// echo "<br>";
// resultat(-15);



// function plusGrandNombre($a,$b,$c):void{
//     if($a>$b && $a>$c){
//         echo "$a est le plus grand nombre";
//     }else if($b>$c){
//         echo "$b est le plus grand nombre";
//     }else if ($c>$a){
//         echo "$c est le plus grand nombre";
//     }else{
//         echo "marche po' !";
//     }
// };

// plusGrandNombre(80,50,12);



//Exercice 3 

// function status($a){
//     if($a>=6 && $a<=7){
//         echo "Poussin";
//     }else if($a>=8 && $a<=9){
//         echo "Pupille";
//     } else if ($a>=10 && $a<= 11){
//         echo "Minime";
//     } else if ($a> 12){
//         echo "Cadet";
//     }else {
//         echo "Age inférieur à 6";
//     }
// }

// echo "<br>";

// status(4);

// $a =13;

// switch ($a){
//     case ($a >=6 && $a <=7) : echo "Poussin";
//         break;
//     case($a >=8 && $a <=9) : echo "Pupille";
//         break;
//     case ($a>=10 && $a<=11) : echo "Minime";
//         break;
//     case ($a>11) : echo "Cadet";
//         break;
//     default : echo "Si vous lisez ceci c'est qu'il y a un problème";
//     break;
// };



// EXERCICE TABLEAU

//EX 01 
$tab = [10,22,58,89,11,6,148,10,47,28,21,4,2,158,189,2,14];

function plusGrand($tab){
 $max = 0;
foreach($tab as $value){
   
   if($value> $max){
    $max = $value;
   }
   
}
echo 'La valeur la plus grande est : '.  $max;
}

plusGrand($tab);


//Exercice 2 :
//-Créer une fonction qui affiche la moyenne du tableau.

  echo "<br>";
  echo "<br>";
  echo "<br>";
function Moyenne($tab){
    $result = 0;
    $number = 0;
    foreach($tab as $value){
        $result += $value;
        $number ++;
    }
    $result /= $number;
    echo "Moyenne ". floor($result);

}

Moyenne($tab);

echo "<br>";
echo "<br>";
echo "<br>";
// Exercice 3 :
function PlusPetit($tab){
    $initial = 10000;
    $indexMin = null;
    foreach($tab as $index => $value){
        if($value < $initial){
            $initial = $value;
            $indexMin = $index;
        }
    }
    echo 'La valeur la plus petite est : ' . $initial . " et le numéro de la colonne est : " . $indexMin;
}

PlusPetit($tab);



// Exercice formulaire


?>
<br>
<br>
<br>
<br>


<br>
<br>
<br>
<br>


<!-- <?php
    if(isset($_POST['envoyer'])){
    if(isset($_POST['prixHT']) && !empty($_POST['prixHT']) && isset($_POST['Qte']) && !empty($_POST['Qte'])  && isset($_POST['Tva']) && !empty($_POST['Tva']) ){
        
        $var1 = $_POST['prixHT'];
        $var2=  $_POST['Qte'];
        $var3=  $_POST['Tva'];
        $resultat = ($var1*$var2)*(1+$var3/100);
        echo "Le prix TTC est égal à : $resultat €. " ;

    };
    
};
?>


<form action="testphp.php" method="post">
    <input type="text" placeholder="prix HT" name="prixHT">
    <input type="number" placeholder="Quantité" name="Qte">
    <input type="text" placeholder="Taux de TVA" name="Tva">
    <button type="submit" name="envoyer">Envoyer</button>


</form> 

-->

<?php 
    if(isset($_POST['envoyer'])){
        echo "test";
        dump($_POST);
        // Vérifier si les champs sont remplis :
        if(isset($_POST['firstname'])  && !empty($_POST['firstname']) && isset($_POST['lastname'])  && !empty($_POST['lastname']) && isset($_POST['email'])  && !empty($_POST['email']) && isset($_POST['password'])  && !empty($_POST['password']) && isset($_FILES['fichier'])  && !empty($_FILES['fichier']) ){
            // récupération des inputs dans des variables :
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $file = $_FILES['fichier'];
          $email_validation_regex = '/^\\S+@\\S+\\.\\S+$/';

          // Vérification de l'émail 
          if (preg_match($email_validation_regex, $email)){
            echo "c'est bon mon gars ça marche !";
                // Vérifier si le mot de passe à 12 caractères minimum lettres min maj et chiffres
                $password_regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{12,}$/';
                    if(preg_match($password_regex, $password)){
                        echo "Mot de passe conforme aux attentes !";
                        // Vérifier si le fichier est inférieur à 12 Mo
                        if($_FILES["fichier"]["size"] > (1024*1024*12)) {
                            echo "Le fichier est trop grand";
                        }else{
                            echo "Fichier accepté !";
                        }
                    }else {
                        echo 'mot de passe non conforme aux attentes !';
                    };
                } else {
                    echo "error 484 it's la merde";
                }
          

        }
    }



?>

<form action="" method="post" enctype="multipart/form-data">
    <label for="firstname">Firstname :</label>
    <input type="text" name="firstname" placeholder="firstname">
    <br>
    <label for="lastname">Lastname :</label>
    <input type="text" name="lastname" placeholder="lastname">
    <br>
    <label for="email">Email :</label>
    <input type="email" name="email" id="email" placeholder="exemple@email.com">
    <br>
    <label for="password">Password :</label>
    <input type="password" name="password" id="password" placeholder="P4s$W0rD">
    <br>
    <label for="fichier">File :</label>
    <input type="file" name="fichier" id="fichier">
    <br><br>
    <button type="submit" value="envoyer" name="envoyer">Envoyer</button>
</form>



