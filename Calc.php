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

	<div class="header">
		<h1 class="text_header">GeekBrains Calculator</h1>
	</div>

	<hr>

	<h2>Простейший калькулятор</h2>
	<form method="POST">
		<input type="number" placeholder="Первое число" name="first" />
		<select name="operation[]" size="1" >
			<option value="sum"> + </option>
			<option value="subtr"> - </option>
			<option value="multiply"> * </option>
			<option value="div"> / </option>
		</select>
		<input type="number" placeholder="Второе число" name="second" />
		<input type="submit" value="=">
	</form>
	<br>
	<?php
	if(isset($_POST["first"]) && isset($_POST["second"]) && isset($_POST["operation"])) 
	{
		$first = htmlentities($_POST["first"]);
		$second = htmlentities($_POST["second"]);
		$operation = $_POST["operation"];
		
		/*$outputt ="		
		первое: $first<br />
		второе: $second<br />
		опер: 
		<ul>
		";
		
		foreach($operation as $item)
			$outputt.="<li>" . htmlentities($item) . "</li>";
			$outputt.="</ul></body></html>";*/
		
		foreach($operation as $item) {
			$output = mathOperation($first, $second, htmlentities($item));
		}
		?>
		<p>Результат = <?php echo $output;
		
	}
	else
	{   
		echo "Введенные данные некорректны";
	}
	
	/*function sum($arg1, $arg2)
		{
			return ($arg1 + $arg2);
		}

		function subtr($arg1, $arg2)
		{
			return ($arg1 - $arg2);
		}

		function multiply($arg1, $arg2)
		{
			return ($arg1 * $arg2);
		}

		function div($arg1, $arg2)
		{
			if ($arg2 == 0) {
				echo "На ноль делить нельзя!";
			}
			return ($arg1 / $arg2);
		}*/
				
		function mathOperation($arg1, $arg2, $arg3){
			switch($arg3) {
				case "sum":
					return ($arg1 + $arg2);
					
				case "subtr":
					return ($arg1 - $arg2);
					
				case "multiply":
					return ($arg1 * $arg2);
					
				case "div":
					if ($arg2 == 0) {
					echo "На ноль делить нельзя!";
					break;
					}
					else return ($arg1 / $arg2);					
			}
		}
	
?>

	<hr>
	
	
</body>

</html>