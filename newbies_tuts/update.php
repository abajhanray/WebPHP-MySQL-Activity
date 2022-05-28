<html>
<head>
<title> Updating</title>
<style>
    <body{
        backgroud-color: whitesmoke;
    }
    input{
        width: 40%;
        height: 5%;
        border: 1px;
        border-radius: 05px;
        padding: 8px 15px 8px 15px;
        margin: 10px 0px 15px 0px;
        box-shadow: 1px 1px 2px 1px grey;

    }
</style>
</head>
<body>
    <center>
    <h1> Update</h1>
        <form action="" method="POST">
			<input type ="text" name="stud_ID" placeholder="Student ID"/></br/>
			<input type ="text" name="firstName" placeholder="First Name"/></br/>
			<input type ="text" name="lastName" placeholder="Last Name"/></br/>
			<input type ="text" name="MI" placeholder="Middle Initial"/></br/>
			<input type ="text" name="course" placeholder="Course"/></br/>
			<input type ="text" name="yearLevel" placeholder="Year Level"/></br/>
		
			<input type ="submit" name="update" value="UPDATE"/>
        </form>
    </center>
</body>
</html>

<?php
//$connection = mysqli_connect("localhost","root","");
$con = mysqli_connect("localhost", "root", "");
//$db = mysqli_select_db($connection,"newbies_db");
$db = mysqli_select_db($con,"newbies_db");


if(isset($_POST['update']))
{
    $id = $_POST['studID'];

    $query = "UPDATE 'tbl_students' SET lastName='$_POST[lastName]',firstName='$_POST[firstName]',MI='$_POST[MI]',course='$_POST[course]',yearlevel='$_POST[yearlevel]',user_level='$_POST[user_level]',status='$_POST[status]' where studID='$_POST[studID]' ";
    $query_run = mysqli_query($con,$query);


    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data not Updated") </script>';
    }
}
?> 