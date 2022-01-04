<?php session_start(); ?>
<?php require"Header.php" ?>
<div class="d-flex">
	<div>
		<?php require"sidebar.php" ?>
	</div>
	<div class="project">
		<?php require"topnav.php" ?>
		<div class="text-center py-2 text-dark title">
			<span>WHAT I HAVE DONE</span>
		</div>
		<div class="row pic mx-0 my-1 px-2 justify-content-center">
			<?php 	require"database.php";
				$sql = "SELECT * FROM project";
				$result = mysqli_query($conn,$sql);
				if($result->num_rows>0)
				{
					while($row=$result->fetch_assoc())
					{?>
						<div class="col-md-3 image" >
							<img src="uploads/<?php echo $row['image'] ?>" id="img" class="img">
						</div>
					<?php }
				}

			 ?>
		</div>
		<div class="popup-image">
			<span>&times;</span>
			<img src="images/9.png" alt="">
		</div>
	</div>
</div>
<?php require"Footer.php" ?>