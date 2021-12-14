<?php
function firstTry($a, $b){
return $a + $b;
};

$c = firstTry(1, 2);
echo $c;

function multiply($a, $b){
    return $a * $b;
    };

print "<br>";

$d = multiply(2, 7);
echo $d;

function divide($a, $b){
    return $a / $b;
    };
    echo("<br>");

echo divide(10, 5);

function operate($a, $op, $b){
switch($op){
    case "+":
        return $a + $b;
        break;
    case "-":
        return $a - $b;
        break;
    case "*";
        return $a * $b;
        break;
    case "/":
        return $a / $b;
        break;
        default:
        echo "Op needs to be an operator string";
        break;
}

    };
    echo("<br>");

    echo operate(2, "*", 3 );
