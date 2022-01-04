<?php 
session_start();
if(isset($_SESSION['admin'])){
require"Header.php"; 
require"database.php"; 

if(isset($_POST['submit1'])){
	$id = $_POST['id'];
	$id;
 
  $name = $_FILES['file']['name'];
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
     // Upload file
     if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
        // Insert record
        $query = "UPDATE profile SET image ='$name' WHERE id='$id'";
        $result =mysqli_query($conn,$query);
        if($result == TRUE){
        	echo "<script>alert('Image Updated succesfully');window.location='dashboard.php';</script>";
        }

     }

  }
 
}

if(isset($_POST['submit2'])){
	$id = $_POST['id'];
	$id;
 
  $name = $_FILES['file']['name'];
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
     // Upload file
     if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
        // Insert record
        $query = "UPDATE sidebar_profile SET image ='$name' WHERE id='$id'";
        $result =mysqli_query($conn,$query);
        if($result == TRUE){
        echo "<script>alert('Image Updated succesfully');window.location='dashboard.php';</script>";
        }

     }

  }
 
}
if(isset($_POST['submit3'])){

  $name = $_FILES['file']['name'];
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
     // Upload file
     if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
        // Insert record
        $query = "INSERT INTO project(image) VALUES('$name')";
        $result =mysqli_query($conn,$query);
        if($result == TRUE){
        	echo "<script>alert('Project Uploaded succesfully');window.location='dashboard.php';</script>";
        }

     }

  }
 
}
?>


<div class="d-flex">
	<div>
		<?php require"sidebar.php"; ?>
	</div>
	<div class="dashboard">
		<div class="bg-primary top-bar">
			<span class="mx-3">Hi <?php echo $_SESSION['admin'] ?> ! </span>
			
			<a href="message.php">
			<i class="far fa-envelope"></i>
			</a>
		</div>
		<div class="row profilePic my-3">
			<h2 class="mb-2">Add Profile Picture:</h2>
			<div class="col-md">
				<form method="post" class="form" enctype="multipart/form-data">
					<label class="form-label">Choose Profile Image:</label>
					<?php 
					require"database.php";
					$sql = "SELECT * FROM profile LIMIT 1";
					$result = $conn->query($sql);
      			if($result->num_rows>0){
        			while($row=$result->fetch_assoc()){?>
        				<input type="file" name="file" class="form-control" required >
        				<input type="hidden" name="id" value="<?php echo $row['id'] ?>">

        				<img src="uploads/<?php echo $row['image'] ?>" style="width: 100px;height: 100px; object-fit: cover;">
        				<?php
        			}
        			}

					 ?>
					<input type="submit" name="submit1" value="update"  class="btn btn-success my-2">
				</form>
			</div>
			<div class="col-md">
				<form method="post" class="form" enctype="multipart/form-data">
					<label class="form-label">Choose Sidebar Image:</label>
					<?php 
					require"database.php";
					$sql = "SELECT * FROM sidebar_profile LIMIT 1";
					$result = $conn->query($sql);
      			if($result->num_rows>0){
        			while($row=$result->fetch_assoc()){?>
        				<input type="file" name="file" class="form-control" required >
        				<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        				<img src="uploads/<?php echo $row['image'] ?>" style="width: 100px;height: 100px; object-fit: cover;">
        				<?php
        			}
        			}
					 ?>
					<input type="submit" name="submit2" value="update" class="btn btn-success my-2">

				</form>
			</div>
		</div>
			<div class="row">
				<h2 class="mb-2">Add Project:</h2>
				<div class="col-md">
					<form method="post" enctype="multipart/form-data">
					<label class="form-label">Choose Image:</label>
						<input type="file" name="file" class="form-control" required >
						<input type="submit" name="submit3" value="Upload" class="my-2 btn btn-success">

					</form>
				</div>
				<div class="listOfProject col-md px-4">
					<h3>List of Project</h3>
				<table class="table table stripped">
					<thead>
						<tr>
							<th>SN</th>
							<th>Image</th>
							<th></th>
						</tr>
					</thead>
					<?php 
					$SN=0;	
						$sql = "SELECT * FROM project";
						$result = mysqli_query($conn,$sql);
						if($result->num_rows > 0)
						{
							while($row = $result->fetch_assoc())
							{
									$SN=$SN+1;?>
										<tr>
												<td><?php 	echo $SN ?>.</td>
												<td><img src="uploads/<?php 	echo $row['image'] ?>" style="width: 80px; height: 80px;object-fit: cover;"></td>
												<td>
													<a href="delete.php?id=<?php echo $row["id"] ?>">Delete</a>
												</td>
										</tr>
							<?php }
						}
					 ?>
					
				</table>
			</div>
		</div>
	</div>
			
		
		
	</div>
<?php require"Footer.php"; 

}
else{
	echo "<h1>OPPS you are not login</h1>";
}
?>
