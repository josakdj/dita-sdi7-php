<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th{
            border:1px solid black;
            border=collapse:collapse;
        }
        th,td{
            padding:10xp 20px;
        }
    </style>
</head>
<body>
<?php
date_default_timezone_set('Europe/Belgrade');

$currentTime = date("H:i");

echo "Current time in Pristina, Kosovo: $currentTime";

?>
    <?php 
    include_once('config.php');
    $sql="SELECT * FROM users";
    $getUsers = $conn->prepare($sql);
    $getUsers->execute();


    $users=$getUsers->fetchAll();
    ?>
<table>
    <thead>
    <th>ID</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Email</th>
    </thead>
        <tbody>
        <?php 
        foreach($users as $user){

        ?>
        <tr>
            <td><?= $user['id'];?>
            <td><?= $user['name'];?>
            <td><?= $user['surname'];?>
            <td><?= $user['email'];?>
        </tr>
        <?php 
        }
        ?>
        </tbody>
</table>

</body>
</html>