<?php include('../include/connect.php');?>


<?php
	$conn = connectDB();
	$title = $_POST['title'];
	if (!empty($title)) {
		$sql = "INSERT INTO `categories`(`Id`, `title`) VALUES (NULL,'$title')";
		$rslt = mysqli_query($conn, $sql);
		header('location:category.php');
	}
	else{
		header('location:category_add.php');
	}
	
?>
