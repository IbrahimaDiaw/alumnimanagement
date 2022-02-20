<?php
 $con = mysqli_connect("localhost", "root", "", "gestion_alumni");

if(isset($_POST['submit']))
{
	$name = $_POST['userName'];
	$msg = $_POST['userMsg'];
	$query = "INSERT INTO chat SET name= '$name', msg='$msg'";
	
	$run = mysqli_query($con, $query);
	// if($run)
	// {
	// 	echo "<embed loop='false' src='gestion_alumni.wav' hidden='true' autoplay='true'/>";
	// }
}



?>