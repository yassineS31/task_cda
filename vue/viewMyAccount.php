<h1>Mon Compte</h1>
<h2>Nom Prénom : <?php echo $_SESSION['lastname']." ".$_SESSION['firstname']?></h2>
<p>Email : <?php echo $_SESSION['email']?></p>
<br>
<br>
<br>
<h3>Modifier mon profil</h3>
<form action="#" method="POST">
    <fieldset>
    <label for="NewName">Nouveau nom :</label>
    <input type="text" placeholder="<?php echo $_SESSION['lastname'] ?>"> <br>
    <label for="NewFirstName">Nouveau prénom :</label>
    <input type="text" placeholder="<?php echo $_SESSION['firstname'] ?>"><br>
    <label for="NewEmail">Nouvel email :</label>
    <input type="text" placeholder="<?php echo $_SESSION['email'] ?>"><br>
    <input type="submit" name="Changer">
    </fieldset>
</form>