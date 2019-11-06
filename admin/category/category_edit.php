<?php include('../include/connect.php');?>


<?php
  session_start();
  $id = $_GET['id'];
  $conn = connectDB();
  $sql = "SELECT * FROM `categories`WHERE Id = $id ";
  $rslt = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($rslt);
?>





<?php include('../include/header.php');?>

		<h2>
			<a class="btn btn-success" href="category.php">Back</a>
		</h2>


	
	<div style="padding: 10px; border: 1px solid #ccc; box-shadow: 1px 1px 6px #aaa">


        <h2>Add New Category</h2>

                <form method="post" action="category_update.php?id=<?php echo $row['Id'];?>">
                  <div class="form-group">
                    <label for="exampleInputTitle">Title</label>
                    <input type="text" class="form-control" id="exampleInputTitle"
                    value="<?php echo $row['title'];?>" placeholder="Enter Title" name="title">
                    
                  </div>
                  
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>

        
        </div>


<?php include('../include/footer.php');?>
