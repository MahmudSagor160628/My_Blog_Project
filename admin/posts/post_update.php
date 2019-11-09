<?php include('../include/connect.php');?>


<?php

	$id = $_GET['id'];
	$conn = connectDB();
	$sql = "SELECT posts.*, categories.title as categoryTitle FROM posts 
    JOIN categories on posts.Category_id = categories.Id
    WHERE posts.Id = '$id'";
	$rslt = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($rslt);


	$ran = rand(111111, 9999999);
	$title = $_POST['title'];
	$description = $_POST['description'];
	$date = $_POST['date'];
	$category_id = $_POST['category_id'];
	$update_sql = "UPDATE `posts` SET `Id`= NULL,`Category_id`='$category_id',`Title`= '$title',
	`Description`='$description',`Date`='$date'";

	if (!empty($_FILES['image']['name'])) {
		
		$image = 'img_upload/'.$ran.$_FILES['image']['name'];
		$upload = '../img_upload/'.$ran.$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'], $upload);
		$update_sql .= ",`Image` = '$image'";
	}

	if (!empty($row['Image']) && file_exists('../'.$row['Image'])) {
		unlink('../'.$row['Image']);
	}
	
	if (!empty($title) || !empty($description) || !empty($date) || !empty($upload) || !empty($category_id)) {
		$update_sql .= "WHERE Id = $id";

		$result = mysqli_query($conn, $update_sql);
		header('location:index.php');
	}
	else{
		header('location:post_edit.php');
	}
	
?>