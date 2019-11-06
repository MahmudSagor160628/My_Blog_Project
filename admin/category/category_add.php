





<?php include('../include/header.php');?>

		<h2>
			<a class="btn btn-success" href="category.php">Back</a>
		</h2>


	
	<div style="padding: 10px; border: 1px solid #ccc; box-shadow: 1px 1px 6px #aaa">


        <h2>Add New Category</h2>

                <form method="post" action="category_store.php">
                  <div class="form-group">
                    <label for="exampleInputTitle">Title</label>
                    <input type="text" class="form-control" id="exampleInputTitle" placeholder="Enter Title" name="title">
                    
                  </div>
                  
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>

        
        </div>


<?php include('../include/footer.php');?>
