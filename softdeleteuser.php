<?php
require_once "connection.php";
    $queryString=$connection->prepare("UPDATE users SET status=? WHERE id=?");
    $status=0;
    $id=$_GET["id"];
    $queryString->execute([$status,$id]);
    header("Location: showusers.php");


