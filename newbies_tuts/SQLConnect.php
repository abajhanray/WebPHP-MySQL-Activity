<?php
//Connection String
		$con = mysqli_connect("localhost", "root", "");
							//Host name, Username, Password :NO
							
		//Test connection to database
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error()); // If not connected
		}
		else{
			echo "<br><br>Status: Connected to phpmyadmin"; //If connected
		}
 
		$db = mysqli_select_db($con,"newbies_db"); //Select a specific database
		if(!$db){
			die('<br>No Database: ' . mysqli_error()); // If not connected
		}
		else{
			echo "<br>Connected to Database.";
		}




















  
// $db = mysqli_select_db("datashop", $con);
// if(!$db){
	// echo "database does not exist";
// }
// else{
	// echo "Connected to database";
// }

// $query=mysqli_query("Select * from tbl_products") or die(mysqli_error());

// while($row = mysqli_fetch_array($query)){
	
		// echo $row['PID'];
	
// }

?>