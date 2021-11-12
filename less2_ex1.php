<?php

$a = -10;
$b = 0;

if($a>=0 && $b>=0) {
    echo ($a-$b);
}
else if($a<0 && $b<0) {
    echo ($a*$b);
}
else if(($a>=0 && $b<0) || ($a<0 && $b>=0)) {
    echo ($a+$b);
}
?>