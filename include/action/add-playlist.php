<?php 
	session_start();

	require '../connection.php';
	require '../class/playlistsclass.php';

	$classPlaylist = new PlaylistsClass($pdo);

	$song_id = $_POST['song_id'];
	$user_id = $_SESSION["id"];
	$name = $_POST['playlist'];

	$addplaylist = $classPlaylist->addplaylist($name, $song_id, $user_id);
	if ($addplaylist){
		header("Location: ../../index.php?page=dashboard&playlist=playlist");
	}
	else{
		header("Location: ../../index.php?page=dashboard&playlist=playlist&error=0");
		echo "
		<script>
			alert('Cannot Delete Playlist, Because There Is Still a Song in It');
			document.location.href = '../../index.php?page=dashboard&playlist=playlist&error=0';
		</script>
 
	";
	}

 ?>