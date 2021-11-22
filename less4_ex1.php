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
	
	$dir="imgs";
	$photos=scandir($dir, 0);	
	
	for($i=2; $i<count($photos); $i++) {?>
		<a href="imgs/<?php print_r($photos[$i]) ?>" target="_blank"><img class="photo" src="imgs/<?php print_r($photos[$i]) ?>" alt="<?php print_r($photos[$i]) ?>"></a> <?php
	}
	
	?>
		
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