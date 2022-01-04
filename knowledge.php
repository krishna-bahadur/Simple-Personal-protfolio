<?php session_start(); ?>
<?php require"Header.php" ?>
<div class="d-flex">
	<div>
		<?php require"sidebar.php" ?>
	</div>
	<div class="knowledge">
	<?php require"topnav.php" ?>
		<div class="text-center py-1 text-dark title">
			<span>KNOWLEDGE I HAVE</span>
		</div>
		<div class="row my-1  p-3">
			<div class="col-md-3 my-2">
				<div class="card">
					<div class="card-image">
							<i class="fab fa-html5"></i>						
					</div>
					<div class="card-body">
						<div class="card-title">
							<span>HTML</span>
						</div>
						<div class="card-text">
							HTML stands for Hyper Text Markup Language.
							HTML is the standard markup language for creating Web pages.
							HTML describes the structure of a Web page.
							HTML consists of a series of elements.
							HTML elements tell the browser how to display the content.
						</div>
					</div>

				</div>
			</div>
			<div class="col-md-3 my-2">
				<div class="card">
					<div class="card-image">
						<i class="fab fa-css3-alt"></i>
					</div>
					<div class="card-body">
						<div class="card-title">
							<span>CSS</span>
						</div>
						<div class="card-text">
							CSS stands for Cascading Style Sheets
						CSS describes how HTML elements are to be displayed on screen, paper, or in other media CSS saves a lot of work. It can control the layout of multiple web pages all at onceExternal stylesheets are stored in CSS files.
						</div>
					</div>

				</div>
			</div>
			<div class="col-md-3 my-2">
				<div class="card">
					<div class="card-image">
						<i class="fab fa-js-square"></i>
					</div>
					<div class="card-body">
						<div class="card-title">
							<span>JavaScript</span>
						</div>
						<div class="card-text">
							JavaScript is the Programming Language for the Web.
							JavaScript can update and change both HTML and CSS.
							JavaScript can calculate, manipulate and validate data.
						</div>
					</div>

				</div>
			</div>
			<div class="col-md-3 my-2">
				<div class="card">
					<div class="card-image">
						<i class="fab fa-php"></i>
					</div>
					<div class="card-body ">
						<div class="card-title">
							<span>PHP</span>
						</div>
						<div class="card-text">
							PHP is an acronym for "PHP: Hypertext Preprocessor"
							PHP is a widely-used, open source scripting language
							PHP scripts are executed on the server
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<?php require"Footer.php" ?>
