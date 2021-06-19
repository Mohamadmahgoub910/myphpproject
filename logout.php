<?php


session_start();
if(isset($_SESSION["name"])){
    unset($_SESSION["name"]);
    unset($_SESSION["password"]);
//    unset session
    session_regenerate_id();
    session_destroy();
    header("Location: login.php");
}