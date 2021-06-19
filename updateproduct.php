<?php
require_once "connection.php";
if(isset($_POST["update"])&& !empty($_POST)){
    $queryString=$connection->prepare("UPDATE users SET proname=?,probrand=?,proexpire=?,proexist=? WHERE id=?");
    $proname=$_POST["proname"];
    $probrand=$_POST["probrand"];
    $proexpire=$_POST["proexpire"];
    $proexist=$_POST["proexist"];
    $id=$_POST["id"];
    $queryString->execute([$proname,$probrand,$proexpire,$proexist,$id]);
    header("Location: showproducts.php");
}else{
    echo "error in form";
}


//id | proname | probrand | proexpire | proexist