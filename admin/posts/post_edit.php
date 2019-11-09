<?php include('../include/connect.php');?>


<?php
    
    $id = $_GET['id'];
	$conn = connectDB();
	$sql = "SELECT * FROM `posts` WHERE Id = $id";
	$rslt = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($rslt);
?>

<?php
    $con = connectDB();
    $sq = "SELECT * FROM `categories`";
    $result = mysqli_query($conn, $sq);
    
?>





<?php include('../include/header.php');?>

		<h2>
			<a class="btn btn-success" href="index.php">Back</a>
		</h2>


	
	<div style="padding: 10px; border: 1px solid #ccc; box-shadow: 1px 1px 6px #aaa">


        <h2> Edit Post</h2>

        <form method="post" action="post_update.php?id=<?php echo $data['Id']; ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputTitle">Title</label>
                    <input type="text" class="form-control" id="exampleInputTitle" 
                    value="<?php echo $data['Title']; ?>" name="title">
                    
                </div>

                <div class="form-group">
                    <label for="exampleInputDescription">Description</label>
                    <textarea type="text" class="form-control" id="exampleInputDescription" placeholder="Enter Description" name="description" rows="10"><?php echo $data['Description']; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputImage">Image</label>
                    <input type="file" class="form-control" id="exampleInputImage"  name="image"> 
                    <img src="../<?php echo $data['Image']; ?>" width='100'>
                </div>

                <div class="form-group">
                    <label for="exampleInputCategory_id">Category Id</label>
                    <select class="form-control" name="category_id">
                    	
                    	<option>Select Category</option>
                    	<?php while ($row = mysqli_fetch_assoc($result)){ ?>

                            <?php if ($data['Category_id'] == $row['Id']) {?>
                    		<option value="<?php echo $row['Id']?>" selected>
                    			<?php echo $row['title'];?></option>
                            <?php } else { ?>

                            <option value="<?php echo $row['Id'];?>">
                                <?php echo $row['title'];?></option>
                            <?php } ?>

                    	<?php }?>

                    </select>
                    
                </div>


                <div class="form-group">
                    <label for="exampleInputDate">Date</label>
                    <input type="Date" class="form-control" id="exampleInputDate" 
                    value="<?php echo $data['Date']; ?>" name="date">
                    
                </div>


                  
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

        
        
        </div>


<?php include('../include/footer.php');?>
