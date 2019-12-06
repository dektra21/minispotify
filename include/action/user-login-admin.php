<?php
    session_start();
    require '../connection.php';
    require '../class/adminsclass.php';
    
    $classUsers = new UsersClass($pdo);
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = $classUsers->login($username, $password);
    if ($login) {
        header("Location:../../admin/index.php?page=dashboard");
    }
    else {
        header("Location:../../admin/index.php?error=0");
    }
?>