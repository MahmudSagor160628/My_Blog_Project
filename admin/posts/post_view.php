<?php include('../include/connect.php');?>


<?php
    
    $id = $_GET['id'];
	$conn = connectDB();
	$sql = "SELECT posts.*, categories.title as categoryTitle FROM posts 
    JOIN categories on posts.Category_id = categories.Id
    WHERE posts.Id = '$id'";
	$rslt = mysqli_query($conn, $sql);
    
    $row = mysqli_fetch_assoc($rslt);
    
?>



<?php include('../include/header.php');?>

		<h2>
			<a class="btn btn-success" href="index.php">Back</a>
		</h2>


	
	<div style="padding: 10px; border: 1px solid #ccc; box-shadow: 1px 1px 6px #aaa">


        <h2> View Post</h2>
        <table class="table table-bordered">
            <tr>
                <th>Title</th>
                <td><?php echo $row['Title'];?></td>
            </tr>

            <tr>
                <th>Category</th>
                <td><?php echo $row['categoryTitle'];?></td>
            </tr>

            <tr>
                <th>Description</th>
                <td><?php echo $row['Description'];?></td>
            </tr>

            <tr>
                <th>Image</th>
                <td><img src="../<?php echo $row['Image'];?>" width='200'></td>
            </tr>

            <tr>
                <th>Date</th>
                <td><?php echo $row['Date'];?></td>
            </tr>


            
        </table>

        
        
        
        </div>


<?php include('../include/footer.php');?>
