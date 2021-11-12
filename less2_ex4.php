<php

function mathOperation($arg1, $arg2, $operation){
    switch($operation) {
        case "sum":
            sum($arg1, $arg2);
        case "subtr":
            subtr($arg1, $arg2);
        case "multiply":
            multiply($arg1, $arg2);
        case "div":
            div($arg1, $arg2);
    }

    return 1;
}

?>