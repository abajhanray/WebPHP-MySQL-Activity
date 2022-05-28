<?php
	/*
	 * User-home.php
	 * This is the landing page of all regular users
	 *
	 */
	 echo "Welcome User!";
?>
	<?php include("./templates/header.php");?>

	 <ul>
		<li><a href='#'>Home</a></li>
		<li><a href='#'>Profile</a></li>
		<li><a href='#'>Operations</a></li>
		<li><a href='./index.php'>Logout</a></li>
	 </ul>
	
	 <table border="1" width="100%" height="500px">
	 <?php include("./index.php");?>
		<tr>
			<td>
				<table>
					<tr>
					<?php
						
						$query2 = mysqli_query($con,"SELECT * FROM tbl_students") or die(mysqli_error());
						while($row = mysqli_fetch_array($query2)){
							echo "<td style='color:#000000;background-color:yellow;height:198px;width:150px;'>
										<img src='./imgs/profile.jpg' height='130px' width='150px'><br>
										ID: $row[studID]<br>
										Lastname: $row[lastName]<br>
										firstname: $row[firstName]
								 </td>";
						}
					?>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	 <?php include("./templates/footer.php");?>
	 