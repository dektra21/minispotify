<?php 

include_once("../connection.php");

$name = $_POST['category'];

$query = "INSERT INTO categories 
		  VALUES ('','$name')";
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