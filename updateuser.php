<?php
require_once "connection.php";
if(isset($_POST["update"])&& !empty($_POST)){
    $queryString=$connection->prepare("UPDATE users SET username=?,password=?,name=? WHERE id=?");
    $username=$_POST["username"];
    $password=$_POST["password"];
    $name=$_POST["name"];
    $id=$_POST["id"];
    $queryString->execute([$username,$password,$name,$id]);
    header("Location: showusers.php");
}else{
    echo "error in form";
}


