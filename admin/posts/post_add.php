<?php include('../include/header.php');?>

		<h2>
			<a class="btn btn-success" href="index.php">Back</a>
		</h2>


	
	<div style="padding: 10px; border: 1px solid #ccc; box-shadow: 1px 1px 6px #aaa">


        <h2> Add New Post</h2>

        <form method="post" action="post_store.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputTitle">Title</label>
                    <input type="text" class="form-control" id="exampleInputTitle" placeholder="Enter Title" name="title">
                    
                </div>

                <div class="form-group">
                    <label for="exampleInputDescription">Description</label>
                    <textarea type="text" class="form-control" id="exampleInputDescription" placeholder="Enter Description" name="description" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputImage">Image</label>
                    <input type="file" class="form-control" id="exampleInputImage"  name="image">  
                </div>

                <div class="form-group">
                    <label for="exampleInputDate">Date</label>
                    <input type="Date" class="form-control" id="exampleInputDate" placeholder="Enter Date" name="date">
                    
                </div>


                  
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

        
        
        </div>


<?php include('../include/footer.php');?>
