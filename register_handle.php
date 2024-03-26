<?php
session_start();
require_once 'db.php';

if (isset($_POST['submit'])) {
    $db = new Database();

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $created = time();
    $updated = time();

    $userId = $db->insertUser($name, $surname, $email, $password, $created, $updated);
    if ($userId) {
        echo '<br>' . $userId;
    }
}

header('Location: index.php');
exit();
