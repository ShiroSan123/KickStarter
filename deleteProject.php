<?php 
	$con = mysqli_connect('127.0.0.1','root','','KickStarter');
	mysqli_query($con, "DELETE FROM Projects WHERE id = '".$_GET['id']."'");

	header("Location: acc.php"); 
 ?>