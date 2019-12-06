<?php 

include_once("../connection.php");

$name = $_POST['name'];
$file = $_FILES['file']['name'];
$cover = $_FILES['cover']['name'];
$artist = $_POST['artist'];
$category_id = $_POST['category_id'];
$foldersong = '../assets/songs/';
$foldercover = '../assets/cover/';
$array = explode('.', $_FILES['file']['name']);
$extension = end($array);
$namalagubaru = time().'.'.$extension;
$uploadsong = move_uploaded_file($_FILES['file']['tmp_name'], $foldersong.$namalagubaru);
$uploadcover = move_uploaded_file($_FILES['cover']['tmp_name'], $foldercover.$cover);




$query = "INSERT INTO songs 
		  VALUES ('','$name', '$namalagubaru', '$cover','$artist','$category_id')";
$hasil = mysqli_query ($conn, $query);

if ($hasil) {
	echo "
		<script>
			alert('Data Berhasil Ditambahkan');
			document.location.href = 'dashboard.php';
		</script>
	";
} else{
	echo "
		<script>
			alert('Data Gagal Ditambahkan');
			document.location.href = 'dashboard.php';
		</script>
 
	";
}
 ?>