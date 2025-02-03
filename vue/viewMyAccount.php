<?php session_start();
    include "./header.php";
?>


<h3> <b>Mon profil :</b></h3>
<p>Bienvenue <?php echo $_SESSION['lastname'].$_SESSION['firstname'] ?> !</p>

<p> <b>Votre nom :</b></p> <?php echo $_SESSION['lastname'] ?>
<p><b>Votre prenom :</b></p> <?php echo $_SESSION['firstname'] ?>
<p><b>Votre email :</b></p> <?php echo $_SESSION['email'] ?>


<?php
    include "./footer.php";
?>