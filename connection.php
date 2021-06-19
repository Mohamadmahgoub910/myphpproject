<?php
try{

    $connection =  new PDO('mysql:host=127.0.0.1;port=3306;dbname=vendordb', 'root', '');
    echo "connected";
}catch(PDOException $ex){
    echo $ex->getMessage();
}