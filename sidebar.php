<div class="sidebar py-2">
	<div id="bar">
		<i class="fas fa-bars"></i>
	</div>
	<div class="profile text-center">
		
		<?php 
		require"database.php";
		$sql = "SELECT image FROM sidebar_profile LIMIT 1";
		$result = $conn->query($sql);
      		if($result->num_rows>0){
        	while($row=$result->fetch_assoc()){?>
			<img src="uploads/<?php echo $row['image'] ?>">
			<?php
			}
		}
		 ?>
	</div>
	<div class="mybio text-center text-info my-2">
		<span>Hi ! its me Krishna</span>
	</div>
	<div class="list">
		<ul >
			<?php if(isset($_SESSION['admin'])){ ?>
				<li>
				<a href="dashboard.php">
					<i class="fas fa-th-large"></i>
					<span>Dashboard</span>
				</a>
				<span class="tooltip">Dashboard</span>
			</li>
			<li>
				
				<a href="message.php">
					<i class="fas fa-envelope"></i>
					<span >Messages</span>
				</a>
				<span class="tooltip">Message</span>
			</li>
			<?php } ?>
			<li>
				<a href="index.php">
					<i class="fas fa-home"></i>
					<span>Home</span>
				</a>
				<span class="tooltip">Home</span>
			</li>
			<li>
				<a href="knowledge.php">
					<i class="fas fa-book-reader"></i>
					<span>Knowledge</span>
				</a>
				<span class="tooltip">Knowlegde</span>
			</li>
			<li>
				<a href="project.php">
					<i class="fas fa-laptop-code"></i>
					<span>Project</span>
				</a>
				<span class="tooltip">Project</span>
			</li>
			<li>
				<a href="contact.php">
					<i class="far fa-id-badge"></i>
					<span>Contact</span>
				</a>
				<span class="tooltip">Contact</span>
			</li>
			<?php if(isset($_SESSION['admin'])){ ?>
			<li>
				<a href="logout.php?logout">
					<i class="fas fa-sign-out-alt"></i>
					<span >Logout</span>
				</a>
				<span class="tooltip">Lgout</span>
			</li>
		<?php } ?>
		</ul>
	</div>
</div>




