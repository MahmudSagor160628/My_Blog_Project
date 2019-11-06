<?php include('../include/connect.php');?>


<?php
        session_start();
	$conn = connectDB();
	$sql = "SELECT * FROM `categories`";
	$rslt = mysqli_query($conn, $sql);
?>





<?php include('../include/header.php');?>

<?php
        if(isset($_SESSION['success'])){?>
        <div class="container alert alert-success" role="alert">
                Success!! Data is successfully Deleted... 
        </div>
<?php } ?>


<?php
        if(isset($_SESSION['suc'])){?>
        <div class="container alert alert-success" role="alert">
                Success!! Data is successfully Updated... 
        </div>
<?php } ?>



		<h2>
			<a class="btn btn-success" href="category_add.php">Add Category</a>
		</h2>


	
	<div style="padding: 10px; border: 1px solid #ccc; box-shadow: 1px 1px 6px #aaa">


        <h2> Category List</h2>
        <table class="table table-bordered">
        	<thead>
        		<th>ID</th>
        		<th>Title</th>
        		<th>Action</th>
        	</thead>
        	
        	<?php
                        $i = 0;
                         while ($row = mysqli_fetch_assoc($rslt)) { 
                        $i++
                ?>
        		<tr>
        			<td><?php echo $i;?></td>
        			<td><?php echo $row['title'];?></td>
        			<td>
        				<a class="btn btn-info btn-sm"
                                         href="category_edit.php?id=<?php echo $row['Id'];?>">Edit</a>

        				<a class="btn btn-danger btn-sm" onclick="return confirm('ARE YOU SURE!!')"  href="category_delete.php?id=<?php echo $row['Id'];?>">Delete</a>
        			</td>

        		</tr>
        			


        	<?php } ?>


        	</table>
        </div>
        <?php unset($_SESSION['success']); unset($_SESSION['suc']); ?>


<?php include('../include/footer.php');?>
