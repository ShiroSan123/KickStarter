<?php 
	$con = mysqli_connect('127.0.0.1','root','','KickStarter');
	$title = $_POST['title'];
	$description = $_POST['description'];
	$summa = $_POST['summa'];
	$img = $_POST['img'];
	$place = $_POST['place'];
	$user = $_POST['user'];
	// mysqli_query($con, "INSERT INTO Posts (text, img, user) VALUES('{$txt}','{$img}','{$user}')";
	$query_texts = "INSERT INTO Projects (title, description, goal, donated, img, user, place) 
        VALUES ('{$title}','{$description}','{$summa}',0, '{$img}','{$user}','{$place}')";
    $query_new = mysqli_query($con, $query_texts);

	header("Location: acc.php? nick={$user}"); 
 ?>