<?php include('../include/connect.php');?>

<?php
session_start();
$id = $_GET['id'];
$conn = connectDB();

$sql = "SELECT *FROM `posts` WHERE Id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$img_loc = '../'.$row['Image'];
if (file_exists($img_loc)) {
	unlink($img_loc);
}


$sq = "DELETE FROM `posts` WHERE Id = $id";
$rslt = mysqli_query($conn, $sq);


if ($rslt) {
	$_SESSION['suc'] = 1;
	header("location:index.php");
}


?>