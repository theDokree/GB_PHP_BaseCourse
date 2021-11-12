<!DOCTYPE html>
<html lang="en">

   <?php
        $title = 'Document';
        $header = 'Мой первый сайт';
        $date = date('Y');
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1><?php echo $header; ?></h1>
        <p>Все права защищены. <?php echo $date; ?></p>
    </div>
</body>

</html>