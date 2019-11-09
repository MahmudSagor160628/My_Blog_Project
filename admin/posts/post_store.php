<?php include('../include/connect.php');?>


<?php
	$ran = rand(111111, 9999999);
	$conn = connectDB();
	$title = $_POST['title'];
	$description = $_POST['description'];
	$date = $_POST['date'];
	$category_id = $_POST['category_id'];

	$image = 'img_upload/'.$ran.$_FILES['image']['name'];
	$upload = '../img_upload/'.$ran.$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'], $upload);
	
	if (!empty($title) || !empty($description) || !empty($date) || !empty($upload) || !empty($category_id)) {
		$sql = "INSERT INTO `posts`(`Id`, `Category_id`, `Title`, `Description`, `Image`, `Date`) VALUES (NULL,
		'$category_id','$title','$description','$image','$date')";

		$rslt = mysqli_query($conn, $sql);
		header('location:index.php');
	}
	else{
		header('location:post_add.php');
	}
	
?>