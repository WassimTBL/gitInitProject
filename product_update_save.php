<?php

include("model/database.php");
include("model/product.php");


// recuperation des donnees envoyees par le formulaire

$product_id = $_POST["product_id"];
$product_name = $_POST["product_name"];
$product_detail = $_POST["product_detail"];
$product_price = $_POST["product_price"];
$product_qt = $_POST["product_qt"];

var_dump($_POST);



// executer la fonction de sauvegarde

$db = db_connect();
product_update($db,$product_id,$product_name,$product_detail,$product_price,$product_qt);


// redirection

header("location:product_list_admin.php");