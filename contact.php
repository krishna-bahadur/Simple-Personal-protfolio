<?php session_start(); $mes=$err=""; ?>
<?php if(isset($_POST['submit'])){
	require"database.php";
	$name=$_POST['name'];
	$email=$_POST['email'];
	$comments=$_POST['comments'];

if(empty($name) || empty($email) || empty($comments)){
	$err ="cannot be empty";
}
else{
$sql = "INSERT INTO message(name,email,comments) VALUES('$name','$email','$comments')";
	$result = mysqli_query($conn, $sql);
	if($result == TRUE){
		echo "<script>alert('Successfully Commented');window.location='contact.php';</script>";

	}
}
	
} 
?>
<?php require"Header.php" ?>
<div class="d-flex p-0">
	<div>
		<?php require"sidebar.php" ?>
	</div>
	<div class="contact">
		<?php require"topnav.php" ?>
		<div class="text-center py-1 text-dark title">
			<span>CONTACT ME</span>
		</div>
		<div class="container">

		<div class="my-3 row no-gutters">
			<div class="col-md-2"></div>
			<div class="col-md-4 contact-info ">
				
				<ul type="none" class="p-0">
					<h2 class="mb-3">Contact Information</h2>
					<li class="my-3"><i class="fas fa-map-marker-alt"></i><span>Kathmandu,Nepal</span></li>
					<li class="my-3"><i class="fas fa-phone-volume"></i><span>+977 9818405449</span></li>
					<li><i class="fas fa-envelope-square"></i><span>krishnabk651@gmail.com</span></li>
				</ul>
			</div>
		
				<div class="col-md-6 form" >
					<form  method="post">
						<h2 class="mb-3">Get in touch</h2>
					  <div class="mb-3">
					    <label class="form-label">Name</label>
					    <input type="text" name="name" class="form-control" required>
					    <span class="text-danger"><?php echo $err; ?></span>
					  </div>
					  <div class="mb-3">
					    <label class="form-label">Email address</label>
					    <input type="email" name="email" class="form-control" required >
					    <span class="text-danger"><?php echo $err; ?></span>

					  </div>
					 	<div class="mb-3 form-floating">
						  <textarea class="form-control" name="comments" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
						  <label for="floatingTextarea2">Add Comments</label>
					    <span class="text-danger"><?php echo $err; ?></span>

						</div>
					  
					  <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
					  <span class="text-light"><?php echo $mes ?></span>
					</form>
				</div>
			</div>
	</div>
</div>
</div>
<?php require"Footer.php" ?>