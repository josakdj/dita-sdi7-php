<?php 
include_once('config.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users(name,surname,email) VALUES (:name,:surname,:email)";

    $sqlQuery=$conn->prepare($sql);

    $sqlQuery->bindParam(':name',$name);
    $sqlQuery->bindParam(':surname',$surname);
    $sqlQuery->bindParam(':email',$email);

    $sqlQuery->execute();

        echo "DATA SAVED SUCCESSFULLY";

};




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a User</title>
</head>
<body>

<form action="add.php" method="POST">
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="text" name="surname" placeholder="Surname"><br><br>
    <input type="email" name="email" placeholder="Email"><br> <br>
    <button type="submit" name="submit">Add</button>
</form>    
</body>
</html>

