<?php
if (!isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}
else{
    require '../include/class/usersclass.php';

    $userid = $_SESSION['id'];
    $classUsers = new UsersClass($pdo);
    $userdata = $classUsers->loginUser($userid);
    $name = $userdata->name;
}

?>

<!DOCTYPE html>
<html lang="en" class="uk-background-secondary">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="spotify.png">
    <link rel="stylesheet" href="css/uikit.min.css">
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <title>Admin Sepotifae</title>
    <style>

    </style>

</head>

<body class="uk-background-secondary uk-animation-fade">
   <?php
    require 'dashboard-navbar-admin.php';
   ?>
   <?php
    require 'dashboard-addcategories-addsongs.php';
   ?>
        
</body>

</html>