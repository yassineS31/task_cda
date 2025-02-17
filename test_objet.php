<?php
 
 include "./maison.php";
 include "./vehicule.php";

 echo '_____________________Maison_________________________';

 $mamaison = new Maison("MyHouse",5,4,3);
 echo '<br>';
 echo $mamaison->GetNom();
 echo '<br>';
 echo  $mamaison->getLongueur();
 echo '<br>';

 echo $mamaison->getLargeur();

echo $mamaison->calculSurface();



echo '_____________________Vehicule_________________________';


$voiture = new Vehicule("Mercedes CLK",4,"Gris mate");
echo '<br>';
echo $voiture->getNbrRoue();
echo '<br>';

echo $voiture->getNomVehicule();
echo '<br>';

echo $voiture->getCouleur();
echo '<br>';

echo $voiture->getVitesseMax();
echo '<br>';



// Moto : 
$moto = new Vehicule("Honda CBR",2,'rouge');
$moto->setVitesseMax(280);
echo $moto->getVitesseMax();
echo '<br>';

// dedect():
//voiture :
echo $voiture->detect();
echo '<br>';

// moto : 
echo $moto->detect();
echo '<br>';
// Booster
echo "vitesse initial de la " . $voiture->getNomVehicule()." est de : ". $voiture->getVitesseMax(). " km\h";
echo '<br>';

echo $voiture->boost();
echo '<br>';
echo "vitesse après appel de la méthode boost() de la " . $voiture->getNomVehicule()."  : ". $voiture->getVitesseMax(). " km\h";
echo '<br>';

echo '<br>';

echo $voiture->getVitesseMax();echo '<br>';

echo $moto->getVitesseMax();
echo '<br>';
echo '<br>';
echo '<br>';

echo $voiture->plusRapide($voiture,$moto);