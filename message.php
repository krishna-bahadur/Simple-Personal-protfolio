<?php session_start();
if(isset($_SESSION['admin'])){ ?>
<?php require"Header.php" ?>
<div class="d-flex p-0">
	<div>
		<?php require"sidebar.php" ?>
	</div>
	<div class="message px-4 ">
		<h2 class="my-2">List of Messages</h2>
		<div class="table">
			<table>
				<?php 
				require"database.php";
				$sn=0;
				$sql ="SELECT * FROM message";
				$result = mysqli_query($conn,$sql);
				if($result->num_rows>0){
					while($row=$result->fetch_assoc())
					{ $sn=$sn+1;
						?>
						<tr>
							<td><?php echo $sn ?>.</td>
							<td><b>Name:</b> <?php echo $row['name'] ?> </td>
							<td><b>Email:</b> <?php echo $row['email'] ?> </td>
							<td><b>Comments:</b> <?php echo $row['comments'] ?></td>
						</tr>
					<?php
					}
				}
				else{
					echo "<h5>NO MESSAGES</h5>";
				}

				 ?>
				
			</table>

		</div>
	</div>
</div>
<?php require"Footer.php"; 
}
else{
	echo "<h1>OPPS ! You are not login.</h1>";
}
?>