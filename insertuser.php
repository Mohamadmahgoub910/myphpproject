<?php
include("connection.php");
if (isset($_POST["insertuser"])&& !empty($_POST)) {
    $querystr = $connection->prepare("insert into users (username,password,name,status)values(?,?,?,?)");
    $username = $_POST["username"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $status=1;
    // binding ? with inputs
    if ($querystr->execute([$username,$password,$name,$status])) {
        header("Location: showusers.php");
    } else {
        echo "Error to load pleaze do it again! \n";
    }
}
//id | proname | probrand | proexpire | proexist