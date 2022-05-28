<?php
	/*
	 * Admin-home.php
	 * This is the landing page of the Administrator account
	 *
	 */
?>	 
<?php include("./templates/header.php");?>	
<?php include("./templates/sidebar.php");?>	
	<div id="main-container">
		<?php echo "Welcome Admin!";?>
		<ul>
		<li><a href='#'>Home</a></li>
		<li><a href='#'>Accounts</a></li>
		<li><a href='#'>Operations</a></li>
		<li><a href='./index.php'>Logout</a></li>
		</ul>
	</div>
<?php include("./templates/footer.php");?>
