<?php
include "userpro.php";
require_once "connection.php";
$querystr = $connection->prepare(" select u.username , p.proname from users u inner join products p on u.name = p.proname");
$querystr->execute();
$userpro = $querystr->fetchAll(PDO::FETCH_CLASS,'userpro');

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
            <th>ProName</th>
            <th>Name</th>

        </tr>
        <?php foreach ($userpro as $userproduct): ?>
            <tr>
                <td><?=$userproduct->username?></td>
                <td><?=$userproduct->proname?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</center>


<hr>

</body>

</html>