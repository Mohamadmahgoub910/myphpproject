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
               <td> <a title="عين العقل " href="restoreuser.php?id=<?= $user->id?>"><i class="material-icons" style="color: #8b0074;">settings_backup_restore</i></a>
                   <a title="يبني رايح فين " href="deletedusers.php?id=<?= $user->id?>"><i class="material-icons" style="color: rgba(139,0,0,0.59);">person_remove</i></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</center>

<hr>



</body>

</html>