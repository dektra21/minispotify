<?php
    session_start();
    require '../connection.php';
    require '../class/usersclass.php';
    
    $classUsers = new UsersClass($pdo);
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = $classUsers->login($username, $password);
    if ($login) {
        header("Location:../../index.php?page=dashboard");
    }
    else {
        header("Location:../../index.php?error=0");
    }
?>