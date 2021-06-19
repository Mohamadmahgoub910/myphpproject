<?php
require_once "User.php";
require_once "connection.php";
$queryString=$connection->prepare("select * from users WHERE id=?");
$id=$_GET["id"];
$queryString->execute([$id]);
$data=$queryString->fetchAll(PDO::FETCH_CLASS,'User');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        h3{
            text-align: center;
            margin-top:10px;
            color: #6f42c1;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <?php foreach($data as $user):?>
            <h3>Edit <?=$user->username;?></h3>
            <form class="row g-3 needs-validation" action="updateuser.php" method="post" novalidate>
            <input type="hidden" name="id" value="<?=$user->id;?>">
            <div class="col-md-4">
            </div>

            <div class="col-md-4">
                <label>Username</label>
                    <input type="text" name="username" value="<?=$user->username;?>"  required>
            </div>
            <div class="col-md-4">
                <label >Password</label>
                <input type="password" name="password"  value="<?=$user->password;?>"required>
            </div>
            <div class="col-md-6">
                <label>Name</label>
                <input type="text"  name="name"  value="<?=$user->name;?>"required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" name="update" type="submit">Update</button>
            </div>
            </form>
        <?php endforeach;?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>