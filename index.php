<?php session_start(); ?>
<?php require"Header.php";require"database.php";?>
<div class="d-flex p-0">
	<div>
		<?php require"sidebar.php" ?>
	</div>
	<div class="home">
		<?php require"topnav.php" ?>
		<div class="one">
		 <div class="row my-2 index">
	<div class=" col-md d-flex bio">
		<div class="describe">
			<span>Hello I'm</span>
			<h1 class="my-2 text-success">Krishna Bk</h1>
			<p>I am beginner in web development, trying to improve my knowledge and my skill. I'm currently studying Bachelor of Computer Applications at Orchid International College .</p>
			<a href="contact.php" class="btn btn-outline-dark">Contact me</a>
		</div>
		</div>
	<div class="col-md image my-3 mx-3">
		 <?php 
		$sql = "SELECT image FROM profile LIMIT 1";
		$result = $conn->query($sql);
      		if($result->num_rows>0){
        	while($row=$result->fetch_assoc()){?>
			<img src="uploads/<?php echo $row['image'] ?>">
			<?php
			}
		}
		 ?>
	</div>
</div> 
	</div>
</div>
</div>
<?php require"Footer.php" ?>
