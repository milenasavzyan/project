<?php
var_dump($_POST);
if(isset($_POST['submit'])){
    $mysqli = mysqli_connect('localhost', 'root', '', 'tasks');
    $x = time();

    if(empty($_POST['id'])){
        $query = 'INSERT INTO task1 (name, surname, email, password, created, updated)
				  VALUES ("'.$_POST['name'].'", "'.$_POST['surname'].'", "'.$_POST['email'].'",  "'.password_hash($_POST['password'], PASSWORD_DEFAULT).'", "'.$x.'", "'.$x.'")';
        mysqli_query($mysqli, $query);
        $xyz = mysqli_insert_id($mysqli);
        echo '<br>'.$xyz;

    }


}

if(isset($_POST['delete'])){
    $mysqli = mysqli_connect('localhost', 'root', '', 'tasks');
    $query = 'DELETE FROM task1 WHERE id='.$_POST['id'];
    mysqli_query($mysqli, $query);
}

header('Location:index.php');


?>