<?php
require_once "connection.php";
$queryString=$connection->prepare("DELETE FROM products WHERE id=?");
$id=$_GET["id"];
$queryString->execute([$id]);
header("Location: showproducts.php");
