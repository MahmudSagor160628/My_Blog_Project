<?php include('../include/connect.php');?>


<?php
  session_start();
  $id = $_GET['id'];
  $title = $_POST['title'];
  $conn = connectDB();
  $sql = "UPDATE `categories` SET `Id`=$id,`title`='$title' WHERE Id = $id ";
  $rslt = mysqli_query($conn, $sql);
  
  if ($rslt) {
  	$_SESSION['suc'] = 1;
		header('location:category.php');
  }
?>