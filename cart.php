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
		
	</style>
	
</head>

<body>

	<?php
	
	$link = mysqli_connect("localhost", "root", "root", "gb_cart");
	
	if($link == false) {
		print("Ошибка. Соединение не установлено" . mysql_connect_error());
	}
	else {
		print("Соединение установлено");
	}
	 
	session_start();
 
	if ( !@is_array($_SESSION['cart']) ) { 
		$_SESSION['cart'] = array(); 
	}
	 
	$sql = "SELECT * FROM cart";
	if($result = mysqli_query($link, $sql)) {
		foreach($result as $row) {
			$cart_id = $row["id"];
			$cart_name = $row["name"]; ?>			
			
			
			<p>ID товара в БД: <?php echo $cart_id ?> Наименование товара: <?php echo $cart_name ?></p> <a href="shopCart.php?prodId=<?php echo $cart_id ?>=true"> Добавить в корзину </a><?php
					
		}
	}
	
	if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
	}
	$prodId = isset($_GET['prodId']) ? $_GET['prodId'] : null;
	if(!empty($prodId)){
	$_SESSION['cart'][] = $prodId;
	Header("Location: index.php?product_id={$prodId}");
	}
	
	//print_r($_SESSION['cart']);
	
	?>

	
	
</body>

</html>