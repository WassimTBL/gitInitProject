<?php

include ('model/database.php');
include ('model/product.php');
include ('model/user.php');

$db = db_connect();

$connect = checkUser($db,'client1','client1');

var_dump($connect);
// $products = product_get_all($db);
// var_dump($products);


// product_update($db,3,"article9","d9",2022,11);
// product_update($db,3,"article9","d9",2022,11);