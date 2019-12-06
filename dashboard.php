<?php

if (!isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}
else{
    require 'include/class/usersclass.php';
    require 'include/class/songsclass.php';
    require 'include/class/categoriesclass.php';
    require 'include/class/playlistsclass.php';
    
    $link = isset($_GET['link']) ? $_GET['link'] : NULL;

    $playlist = isset($_GET['playlist']) ? $_GET['playlist'] : NULL;
    
    $userid = $_SESSION['id'];

    $classUsers = new UsersClass($pdo);
    $userdata = $classUsers->loginUser($userid);
    $name = $userdata->name;

    $classSongs = new SongsClass($pdo);
    $newsong = $classSongs->newSong();

    $classCategories = new CategoriesClass($pdo);
    $newcategories = $classCategories->newCategories();

    $classPlaylists = new PlaylistsClass($pdo);
    $newplaylists = $classPlaylists->playlistLagu($userid);



}

// $query3 = "SELECT * FROM playlists";
// $hasil3 = mysqli_query($conn, $query3);

?>

<!DOCTYPE html>
<html lang="en" style="background-color:#222;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="spotify.png">
    <link rel="stylesheet" href="assets/css/uikit.min.css">
    <script src="assets/js/uikit.min.js"></script>
    <script src="assets/js/uikit-icons.min.js"></script>
    <title>Sepotifae</title>
    <style>
       .iya a{
        color:grey;
        padding:10px;
        border-radius:30px;
        transition: all 0.1s ease;
    }
    .iya a:hover{
        background-color:black;
        color:white;
        padding:15px;
        border-radius:35px;
    } 
    </style>

</head>

<body style="background-color:#222;" class="uk-animation-fade">
    <?php
        require 'dashboard-offcanvasmenu.php';
    ?>
    <div class="uk-container navbar-sticky">
        
        <?php
            require 'dashboard-navbar.php';
        ?>
        <br>
            <?php
                if ($link == 'all-songs') {
                    require 'dashboard-all-songs.php';
                }
                elseif ($playlist == 'playlist') {
                    require 'dashboard-playlists.php';
                } 
                else {
                    require 'dashboard-newsong.php';
                    require 'dashboard-categoriessongs.php';
                }
            ?>
    </div>
</body>
</html>