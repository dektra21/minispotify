<?php 

require '../connection.php';
require '../class/songsclass.php';

$classDelete = new SongsClass($pdo);

$id = $_GET["id"];

 $deletesongs = $classDelete->delete($id);
    if ($deletesongs){
        header("Location: ../../index.php?page=dashboard&playlist=playlist");
	}
	else{
		header("Location: ../../index.php?page=dashboard&playlist=playlist&error=0");
	}

    
?>

