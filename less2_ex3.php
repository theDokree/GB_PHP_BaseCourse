<php

function sum($a, $b)
{
    return ($a + $b);
}

function subtr($a, $b)
{
    return ($a - $b);
}

function multiply($a, $b)
{
    return ($a * $b);
}

function div($a, $b)
{
    if ($b == 0) {
        echo "На ноль делить нельзя!"
        break;
    }
    return ($a / $b);
}

?>