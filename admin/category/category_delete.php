<?php include('../include/connect.php');?>

<?php
	
	session_start();
	$id = $_GET['id'];
	
	$conn = connectDB();
	
	$sql = "DELETE FROM `categories` WHERE Id = $id ";
	$rslt = mysqli_query($conn, $sql);
	if ($rslt) {
		$_SESSION['success'] = 1;
		header('location:category.php');
	}
	

 ?>