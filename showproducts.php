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
                    <a title="تعديل" href="editproduct.php?id=<?= $product->id?>"><i class="material-icons" style="color: rgba(70,149,0,0.79)">edit</i></a>
                    <a title="انت ف وعيك يبني " href="softdeleteproduct.php?id=<?= $product->id?>"><i class="material-icons" style="color: #8b0074;">person_remove</i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <h3 style="color: forestgreen"> <a href="deletedproducts.php"> deleted products </a></h3>
    <br>
</center>


<hr>

<form class="row g-3 needs-validation" action="insertproduct.php" method="post" novalidate>
    <input type="hidden" name="id" value="<?=$product->id;?>">
    <div class="col-md-4">
    </div>

    <div class="col-md-4">
        <label>Product Name</label>
        <input type="text" name="proname"   required>
    </div>
    <div class="col-md-4">
        <label >Product brand</label>
        <input type="text" name="probrand"  required>
    </div>
    <div class="col-md-4">
        <label >Product expire</label>
        <input type="date" name="proexpire"  required>
    </div>
    <div class="col-md-3">
        <label for="validationCustom04" class="form-label">ProductExist</label>
       <div class="form-check">
            <input  type="radio" name="proexist"  value="0" checked >
            <label  >
                no
            </label>
        </div>
        <div class="form-check">
            <input  type="radio" name="proexist" value="1" >
            <label >
                yes
            </label>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" name="insertproduct" type="submit">Update</button>
    </div>
</form>

</body>

</html>