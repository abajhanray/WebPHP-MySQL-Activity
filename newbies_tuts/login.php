<?php
//login.php
// echo "login process here...";
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

include("SQLConnect.php");
$query = mysqli_query($con,"SELECT studID, lastName, user_level FROM tbl_students WHERE studID='".$_POST['uname']."'") or die(mysqli_error());

if($query)
{
	while($row = mysqli_fetch_array($query))
	{		
		if($row['lastName'] == $_POST['pwd'])
		{
		
		// echo $row['user_level'];
			if($row['user_level'] == "admin")
			{
				echo "<br><br><br>Login Successfull!";
				header("Location:Admin-home.php");
			}
			else{
				header("Location:User-home.php");
			}
		}
		else
		{
			include("./index.php");
		}
	}
}

?>