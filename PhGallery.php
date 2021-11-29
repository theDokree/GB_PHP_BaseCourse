<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $title; ?></title>
    <link rel="stylesheet" href="style.css">
	
	<style>
	
	.header {
	margin-top: 25px;
	margin-bottom: 25px;
	}
	
	.text_header {
	font-size: 20px;
	text-align: center;
	}
	
	.photo {
		width:280px;
	}
	
	</style>
	
</head>

<body>

	<div class="header">
		<h1 class="text_header">GeekBrains Photo Gallery</h1>
	</div>

	<hr>

	<?php
	//
	//$dir="imgs";
	//$photos=scandir($dir, 0);
	
	//for($i=0; $i<count($photos); $i++) {
	//	$file=fopen("$photos[$i]", "r");
	//}
	//header("Content-Type: image/jpeg");
	
	
	
	//for($i=0; $i<count($photos); $i++) {
	//	$file=fopen($photos[$i], "rb");
	//	$fille=fread($file, 1);
	//	fclose($file);
	//}
	
	$link = mysqli_connect("localhost", "root", "root", "gb_photos");
	
	if($link == false) {
		print("Ошибка. Соединение не установлено" . mysql_connect_error());
	}
	/*else {
		print("Соединение установлено успешно!");
	}*/
	
	/*$dir="imgs";
	$photos=scandir($dir, 0);	
	/*
	for($i=2; $i<count($photos); $i++) {
		
		$name=basename($photos[$i]);
		$size=filesize($photos[$i]);
		
		$sql = "INSERT INTO photos (name, size, click) VALUES ('$name', $size, 0)";
		$result = mysqli_query($link, $sql);
		
		if($result == false) {
			print("Произошла ошибка при выполнении запроса");
			print($name);
			print($size);
		}
		else {
			print($name);
			print($size);
		}				
	}*/
	
	$sql = "SELECT * FROM photos";
	if($result = mysqli_query($link, $sql)) {
		foreach($result as $row) {
			$ph_id = $row["id"];
			$ph_name = $row["name"];
			$ph_size = $row["size"];
			$ph_click = $row["click"]; ?>
			
			<a href="PhGallery_Id.php?id=<?php echo $ph_id ?>=true" target="_blank"><img class="photo" src="imgs/<?php echo $ph_name ?>" alt="<?php $ph_id ?>"></a> <?php
		
		
		}
	}
	
	function ph_clicked() {
		$ssql = "UPDATE photos SET click=click+1 WHERE id='$ph_id'";
		mysqli_query($link, $ssql);
	}
	
	if(isset($_GET['$ph_id'])) {
		ph_clicked();
	}
	
	mysqli_close($link);
	
	/*for($i=2; $i<count($photos); $i++) {?>
		<a href="imgs/<?php print_r($photos[$i]) ?>" target="_blank"><img class="photo" src="imgs/<?php print_r($photos[$i]) ?>" alt="<?php print_r($photos[$i]) ?>"></a> <?php
	}*/
	
	?>
	<hr>
	
	<a href=PhGallery_Id.php>Просмотр фото по Id</a>
		
	<hr>
	
	<?php
	if ($_FILES && $_FILES["filename"]["error"]== UPLOAD_ERR_OK)
	{
		if($_FILES['filename']['type']=="image/jpeg" && $_FILES['filename']['size']<="2000000")
		{
			$dirr = "imgs/" . $_FILES["filename"]["name"];
			move_uploaded_file($_FILES["filename"]["tmp_name"], $dirr);
			echo "Файл загружен";
		}
		else echo "Файл должен быть формата JPEG и не более 2мб";
	}
	?>
	<h2>Загрузка файла</h2>
	<form method="post" enctype="multipart/form-data">
	Выберите файл: <input type="file" name="filename" size="10" /><br /><br />
	<input type="submit" value="Загрузить" />
	</form>

	<hr>
    <div class="container">
        <h1><?php echo $header; ?></h1>
        <p>Все права защищены. <?php echo $date; ?></p>
    </div>
</body>

</html>