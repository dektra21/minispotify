<?php
    session_start();
    require '../connection.php';
    require '../class/usersclass.php';
    
    $classUsers = new UsersClass($pdo);

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $register = $classUsers->register($username, $password,  $password2, $name, $email);
    if ($register) {
        header("Location:../../index.php");
    }
    else {
        header("Location:../../index.php?page=register&error=0");
    }
?>