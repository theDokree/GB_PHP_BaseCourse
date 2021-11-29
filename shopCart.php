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
	
	$link = mysqli_connect("localhost", "root", "root", "gb_cart");
	
	if($link == false) {
		print("Ошибка. Соединение не установлено" . mysql_connect_error());
	}
	else {
		print("Соединение установлено");
	}
	
	
			
	$label = 'prodId';
	$id = false;
	if(!empty($_GET[$label])) {
		$id = $_GET[$label];
	}
	$sql = "SELECT * FROM cart WHERE id = '$id'";
	if($result = mysqli_query($link, $sql)) {
		foreach($result as $row) {
			$cart_id = $row["id"];
			$cart_name = $row["name"]; ?>			
			
			
			<p>ID товара в БД: <?php echo $cart_id ?> Наименование товара: <?php echo $cart_name ?></p> <a href="shopCart.php?prodId=<?php echo $cart_id ?>=true"> Добавить в корзину </a><?php
					
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