<?php
include("connection.php");
if (isset($_POST["insertproduct"])&& !empty($_POST)) {
    $querystr = $connection->prepare("insert into products (proname,probrand,proexpire,proexist,status)values(?,?,?,?,?)");
    $proname = $_POST["proname"];
    $probrand = $_POST["probrand"];
    $proexpire = $_POST["proexpire"];
    $proexist = $_POST["proexist"];
    $status=1;
    // binding ? with inputs
    if ($querystr->execute([$proname,$probrand,$proexpire,$proexist,$status])) {
        header("Location: showproducts.php");
    } else {
        echo "Error to load pleaze do it again! \n";
    }
}
//id | proname | probrand | proexpire | proexist