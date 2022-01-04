<?php 
session_start();
require"Header.php" 
?>
<?php 
if(isset($_POST['save'])){
	$username = $_POST['username'];
	$password= $_POST['password'];

	require"database.php";
	$sql = "SELECT * FROM login WHERE username = '$username' AND password='$password'";
	$result= mysqli_query($conn,$sql);
	if($result == TRUE){
	        $_SESSION['admin']=$username;
	        header("location:dashboard.php");
	    }
	    else{
	    	echo "<script>alert('Invalid Username OR Password')</script>";
	    }

}
?>


<div class="login">
		<form class="col-md-4 login-wrap text-center py-3 offset-md-4" method="post" action="">
			<div class="my-3">
				<h2>WELCOME KRISHNA</h2>
			</div>

			<label for="name" class="form-label">Username</label>
			<input type="text" name="username" class="form-control" id="username" required>

			<label for="password" class="form-label mt-1 ">Password</label>
			<input type="password" name="password" class="form-control" id="password" required>


			<button class="btn btn-primary mt-3 btn-lg" type="submit" name="save" onclick="return adminvalidation()">Login</button><br>
		</form>
	</div>
	<?php require"Footer.php" ?>