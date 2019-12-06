<?php 
	session_start();

	require '../connection.php';
	require '../class/songsclass.php';

	$classSongs = new SongsClass($pdo);

	$name = $_POST['name'];
    $file = $_FILES['file'];
    $cover = $_FILES['cover'];
    $artist = $_POST['artist'];
    $category_id = $_POST['category_id'];

	$addSongs = $classSongs->addSongs($name,$file,$cover,$artist,$category_id);
	if ($addSongs){
		header("Location: ../../admin/index.php?page=dashboard");
	}
	else{
		header("Location: ../../admin/index.php?page=dashboard&error=0");
	}

 ?>