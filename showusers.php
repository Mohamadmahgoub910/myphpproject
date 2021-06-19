<?php
require_once "User.php";
require_once "connection.php";
$querystr = $connection->prepare("select * from users where status=1");
$querystr->execute();
$users = $querystr->fetchAll(PDO::FETCH_CLASS,'User');

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
<h3>Welcome to Show Users Page</h3>
<center>
    <table >
        <tr>
            <th>ID</th>
            <th>UserUserName</th>
            <th>UserPassword</th>
            <th>UserName</th>
            <th>control</th>

        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?=$user->id?></td>
                <td><?=$user->username?></td>
                <td><?=$user->password?></td>
                <td><?=$user->name?></td>
                <td><a title="تعديل" href="edituser.php?id=<?= $user->id?>"><i class="material-icons" style="color: rgba(70,149,0,0.79)">edit</i></a> <a title="انت ف وعيك يبني " href="softdeleteuser.php?id=<?= $user->id?>"><i class="material-icons" style="color: #8b0074;">person_remove</i></a> </td></td>
            </tr>
        <?php endforeach; ?>
    </table>
</center>
    <h3 style="color: forestgreen"> <a href="deletedusers.php"> deleted users </a></h3>
<hr>

<form class="row g-3 needs-validation" action="insertuser.php" method="post" novalidate>
    <input type="hidden" name="id" value="<?=$user->id;?>">
    <div class="col-md-4">
    </div>

    <div class="col-md-4">
        <label>UserName</label>
        <input type="text" name="username"   required>
    </div>
    <div class="col-md-4">
        <label >Password</label>
        <input type="password" name="password"  required>
    </div>
    <div class="col-md-4">
        <label >Name</label>
        <input type="text" name="name"  required>
    </div>

    <div class="col-12">
        <button class="btn btn-primary" name="insertuser" type="submit">Update</button>
    </div>
</form>

</body>

</html>