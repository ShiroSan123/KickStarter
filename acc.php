<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
	$con = mysqli_connect('127.0.0.1','root','','KickStarter');
	$query = mysqli_query($con, "SELECT * FROM Projects WHERE user = 'Hokuriku Aluminium' ");
	$num = mysqli_num_rows($query);
 ?>
<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="index.php" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href=""><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<div class="col-8 mx-auto">
	<div class="col-10 mx-auto">
		<form action="addProject.php" method="POST">
			<input type="" name="title" class="form-control col-12" placeholder="Загаловок">
			<textarea name="description" class="form-control col-12 mt-2" placeholder="Описание"></textarea>
			<input type="" name="summa" class="form-control col-12 mt-2" placeholder="Необходимая сумма (только сумма)">
			<input type="" name="img" class="form-control col-12 mt-2" placeholder="Обложка">
			<input type="" name="place" class="form-control col-12 mt-2" placeholder="Город">
			<input type="" name="user" class="form-control col-12 mt-2" placeholder="User">

			<button class="btn btn-success mt-4">Создать проект</button>
		</form>
	</div>
	<h1 class="mt-3">My project</h1>
	<?php 
		for ($i=0; $i < $num; $i++) { 
		$stroka = $query->fetch_assoc();
	 ?>
	<div class="col-12 border">
		<div class="text-center">
			<h4><?php echo $stroka["title"] ?></h4>
			<p><?php echo $stroka["description"] ?></p>
		</div>
		<div class="row">
		 	<div class="col-9" style="height: 500px; background-image: url(<?php echo $stroka["img"] ?>); background-size: cover; background-position: center; ">
		 	</div>
		 	<div class="col-3">
		 		<h4 class="text-success">Собрано</h4>
		 		<h4 class="text-success"><?php echo $stroka["donated"] ?>$</h4>
		 		<h5 class="text-secondary">Необходимая сумма</h5>
			 	<h5 class="text-secondary"><?php echo $stroka["goal"] ?>$</h5>
			 	<form action="RedactProject.php" method="GET">
			 		<input type="" name="id" value="<?php echo $stroka[id] ?>" style="display: none">
		 			<button class="btn btn-success">Редактировать</button>
		 		</form>
			 	<form action="deleteProject.php" method="GET">
				 	<button class="btn btn-danger mt-5">Удалить проект</button>
				 	<input type="" name="id" value="<?php echo $stroka[id] ?>" style="display: none">
			 	</form>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
</body>
</html>