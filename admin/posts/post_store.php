<?php include('../include/connect.php');?>


<?php
	$conn = connectDB();
	$title = $_POST['title'];
	$description = $_POST['description'];
	$date = $_POST['date'];
	$image = 'img_upload/'.$_FILES['image']['name'];
	$upload = '../img_upload/'.$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'], $upload);
	
	if (!empty($title) || !empty($description) || !empty($date) || !empty($upload)) {
		$sql = "INSERT INTO `posts`(`Id`, `Title`, `Description`, `Image`, `Date`) VALUES (NULL,'$title','$description','$image','$date')";

		$rslt = mysqli_query($conn, $sql);
		header('location:index.php');
	}
	else{
		header('location:post_add.php');
	}
	
?>