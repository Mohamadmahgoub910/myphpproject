<?php
require_once "Product.php";
require_once "User.php";
require_once "connection.php";
$querystr = $connection->prepare("select * from products where status=1");
$querystr->execute();
$product = $querystr->fetchAll(PDO::FETCH_CLASS,'Product');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Day5</title>
    <style>
        body{
            text-align: center;
        }
        table,tr,th,td{
            border: 2px solid #0b5ed7;
        }
    </style>
</head>

<body>
<h3>Welcome to Show Products Page</h3>
<center>
    <table >
        <tr>
            <th>ID</th>
            <th>ProductName</th>
            <th>ProductBrand</th>
            <th>ProductExpire</th>
            <th>ProductExist</th>
            <th>control</th>

        </tr>
        <?php foreach ($product as $product): ?>
            <tr>
                <td><?=$product->id?></td>
                <td><?=$product->proname?></td>
                <td><?=$product->probrand?></td>
                <td><?=$product->long?></td>
                <td><?=$proexist=($product->proexist==1)?"yes":"no";
                    "exist:".$proexist?></td>
                <td>
                    <a title="انت ف وعيك يبني " href="restoreproduct.php?id=<?= $product->id?>"><i class="material-icons" style="color: #8b0074;">settings_backup_restore</i></a>
                    <a title="يبني رايح فين " href="deletedusers.php?id=<?= $product->id?>"><i class="material-icons" style="color: rgba(139,0,0,0.59);">person_remove</i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
</center>


<hr>



</body>

</html>