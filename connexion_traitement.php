<?php

include("model/database.php");
include("model/user.php");

$db = db_connect();

// simulation d'un compte utilisateur
$usertest = [
    "username" => "usertest",
    "password" => "passtest"
];

// recuperation des donneés saisies
$user = $_POST["username"];
$password = $_POST["password"];


// verification du compte utilisateur
if (checkUser($db,$user,$password) )
{
    // creation d'une session utilisateur
    session_start();
    $_SESSION['username'] = $user;

    header('location:profil.php');

}
else {
    header("location:connexion.php");
}
