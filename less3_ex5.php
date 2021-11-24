<?php

function replaceSpace($phrase){
    return preg_replace('/\s/',  '_', $phrase);
    }

echo replaceSpace('Все пробелы заменены');

?>