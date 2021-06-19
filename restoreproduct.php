<?php
require_once "connection.php";

$queryString=$connection->prepare("UPDATE users SET status=? WHERE id=?");
$status=1;
$id=$_GET["id"];
$queryString->execute([$status,$id]);
header("Location: showproducts.php");


//id | proname | probrand | proexpire | proexist