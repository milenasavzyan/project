<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'tasks');
$query = 'SELECT * FROM task1';
$result = mysqli_query($mysqli, $query);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="mm">
        <form method = 'post' action = 'register_handle.php'>
                <div class="container">
                    <h1>Sign Up</h1>
                    <hr>
                    <div class = "border">
                        <input type = "text" name = "name" placeholder="name"><br>
                        <input type = "text" name = "surname" placeholder="surname"><br>
                        <input type = "email" name = "email" placeholder="email"><br>
                        <input type = "password" name = "password" placeholder="password"><br>
                    </div>
                    <hr>

                    <button type="submit" class="submit" name = "submit">Submit</button>
                </div>

        </form>
</div>
</body>