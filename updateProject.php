<?php 
	$con = mysqli_connect('127.0.0.1','root','','KickStarter');
	$title = $_GET['title'];
	$description = $_GET['description'];
	$goal = $_GET['goal'];
	$img = $_GET['img'];
	mysqli_query($con,"UPDATE Projects SET title = '{$title}' , description = '{$description}' , goal = '{$goal}' , img = '{$img}' WHERE id = '{$_GET['id']}' ");

	header("Location: acc.php"); 
 ?>