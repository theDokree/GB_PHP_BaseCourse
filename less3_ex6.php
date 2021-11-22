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

	<div class="top">
        <?php
        $myMenu = [
            '<a href="index.html">Главная</a>' => false,
            'Контакты:' => ['<a href="adress.html">Адрес</a>', '<a href="contacts.html">Телефон</a>'],
            '<a href="about.html">О нас</a>' => false
        ];

        function createMenu($Menu)
        {

            echo '<ul class="list">';
            foreach ($Menu as $menuList => $menuListData) {

                if ($menuListData) {
                    echo '<li class="withSubMenu">' . $menuList . '<ul class="subMenu">';

                    foreach ($menuListData as $listData) {
                        echo '<li>' . $listData . '</li>';
                    }
                    echo '</ul></li>';

                } else {
                    echo '<li>' . $menuList . '</li>';
                }
            }
            echo '</ul>';
        }

        createMenu($myMenu);

        ?>
    </div>

    <div class="container">
        <h1><?php echo $header; ?></h1>
        <p>Все права защищены. <?php echo $date; ?></p>
    </div>
</body>

</html>