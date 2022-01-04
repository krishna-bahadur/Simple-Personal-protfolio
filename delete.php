<?php 	
if(isset($_GET['id'])){
	$id=$_GET['id'];
	require"database.php";
	$sql = "DELETE FROM project WHERE id='$id'";
	$result = mysqli_query($conn,$sql);
	if($result == TRUE){
		  echo "<script>alert('Project deleted succesfully');window.location='dashboard.php';</script>";
	}
}

 ?>