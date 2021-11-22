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
		
	$link = mysqli_connect("localhost", "root", "root", "gb_photos");
	
	if($link == false) {
		print("Ошибка. Соединение не установлено" . mysql_connect_error());
	}
	
	$label = 'id';
	$id = false;
	if(!empty($_GET[$label])) {
		$id = $_GET[$label];
	}
	
	$sql = "SELECT * FROM photos WHERE id = '$id'";
	if($result = mysqli_query($link, $sql)) {
		foreach($result as $row) {
			$ph_id = $row["id"];
			$ph_name = $row["name"];
			$ph_size = $row["size"];
			$ph_click = $row["click"]; ?>
			
			<img src="imgs/<?php echo $ph_name ?>" alt="<?php $ph_id ?>">
			
			<div class="container">
				<p>Photo ID: <?php echo $ph_id; ?></p>
				<p>Photo Name: <?php echo $ph_name; ?></p>
				<p>Photo Size: <?php echo $ph_size; ?></p>
				<p>Photo Clicked: <?php echo $ph_click; ?></p>
			</div>
			
			<?php
			
		}
	}
		
	?>

	<hr>
    <div class="container">
        <h1><?php echo $header; ?></h1>
        <p>Все права защищены. <?php echo $date; ?></p>
    </div>
</body>

</html>