Урок 1. Задание 3.

<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true? - Простое сравнение значений переменных без уточнения их типов, значения переменных равны.
    var_dump((int)'012345');     // Почему 12345? - int - приведение к целому числу.
    var_dump((float)123.0 === (int)123.0); // Почему false? - float - переменная с плавающей точкой, int - целочисленное значение. Идёт строгое сравнение значения и типов данных, поэтому false.
    var_dump((int)0 === (int)'hello, world'); // Почему true? - строка принимает значение 0, сравнение верное, поэтому true.
?>