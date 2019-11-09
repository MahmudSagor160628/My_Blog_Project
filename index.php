<?php include('include/header.php');?>

<?php
include('admin/include/connect.php');
$conn = connectDB();

$take =2;


if (isset($_GET['page'])) {

	$page = $_GET['page'];
	$skip = ($page-1)*2 ;
	//echo $skip;
}
else{
	$page = 1;
	$skip = ($page-1)*2;
}

$sql = "SELECT * FROM `posts` ORDER BY Id DESC LIMIT $skip, $take";
$rslt = mysqli_query($conn, $sql);

$sq = "SELECT count(Id) as total FROM posts";
$result = mysqli_query($conn, $sq);
$data = mysqli_fetch_assoc($result);

$total_page =  ceil($data['total']/$take);


?>

<div class="main-content">
	<div class="container">
		<div class="row clearfix">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				 <div class="single-post">
				 	<?php while ($row = mysqli_fetch_assoc($rslt)) { ?>
				 	<div style="padding: 10px; border: 1px solid #ccc; box-shadow: 1px 1px 6px #aaa">
				 		<h2><?php echo $row['Title']; ?></h2>

						 	<div class="row">
							 		<div class="col-md-4">
							 			<img src="admin/<?php echo $row['Image']; ?>" width='200'>

							 		</div>
						 			<div class="col-md-8">
						 				It usually begins with: “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.” The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout.
						 			</div>
						 	</div>
					 	</div><br>
					 <?php } ?>

				 </div>

				 	<div class="row clearfix">
				 		<div class="col-md-4"></div>
				 		<div class="col-md-4"> Showing page <?php echo $page; ?> of <?php echo $total_page?></div>
				 	</div>

					 <div class="row clearfix">

						 	<div class="col-md-5">
						 		<?php if ($page>1) { ?>
						 		
						 			<a class="btn btn-primary" 
						 			href="index.php?page=<?php echo $page-1; ?>"> previous </a>

						 		<?php }  ?>
						 	</div>

						 	<div class="col-md-4">
						 		<?php for ($i=1; $i <= $total_page ; $i++) { ?>
						 			<a class="btn btn-info btn-sm" href="index.php?page=<?php echo $i ?>"><?php echo $i ?></a>
						 			
						 		<?php }  ?>
						 	</div>

						 	<div class="col-md-3">
						 		<?php if ($page < $total_page) { ?>

						 			<a class="btn btn-primary" style="float: right;" 
						 			href="index.php?page=<?php echo $page+1; ?>"> Next </a>
						 		<?php }  ?>
						 	</div>
					 	
					 	
					 </div>

					 
				</div>


			    
				
			</div>
		</div>
	</div>
</div>


<?php include('include/footer.php');?>


     