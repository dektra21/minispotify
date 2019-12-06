<?php 
	session_start();

	require '../connection.php';
	require '../class/categoriesclass.php';

	$classCategories = new CategoriesClass($pdo);

	$name = $_POST['category'];

	$addcategories = $classCategories->add($name);
	if ($addcategories){
		header("Location: ../../admin/index.php?page=dashboard");
	}
	else{
		header("Location: ../../admin/index.php?page=dashboard&error=0");
	}

 ?>
