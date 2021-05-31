<?php

include "../../communsFiles/test.php";
include "../../BD/dbConnexion.php";
session_start();
//connexion bd:
$connexion=new DBConnection();
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$identifiant=$_POST['identifiant'];
if(isset($nom,$prenom,$email,$identifiant)){
    $requete = 'UPDATE entreprise_user SET nom="'.$nom.'",prenom="'.$prenom.'",email="'.$email.'",identifiant="'.$identifiant.'" WHERE id='.$_SESSION['id_user'].';';
    $connexion->execute($requete);
    header('Location: profile.php');

}















?>