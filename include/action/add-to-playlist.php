<?php 
	session_start();

	require '../connection.php';
	require '../class/playlistsclass.php';

	$classPlaylist = new PlaylistsClass($pdo);

    $playlist_id = $_POST['playlist_id'];
    $song_id = $_POST['song_id'];
    

	$addtoplaylist = $classPlaylist->addtoplaylist($playlist_id, $song_id);
	if ($addtoplaylist){
		header("Location: ../../index.php?page=dashboard&playlist=playlist");
	}
	else{
		header("Location: ../../index.php?page=dashboard&playlist=playlist&error=0");
	}

 ?>