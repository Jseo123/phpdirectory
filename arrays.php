<?php
$a = array("Hola", "Como", "Estas", "?");
$b = array(2, 3.5, 3, 1.2);

$arrayOfArray = array($a, $b);
print_r($a);
print("<br>");
print_r($b);
print("<br>");
print_r($arrayOfArray);
print("<br>");
print(count($a) . "<br>");
$c = array_combine($a,$b);
print_r($c);
print("<br>");
print end($a);
print("<br>");
$f = array(1, 2, 3, 4, 5);
print_r($f);
$d = array_push($f , 6, 7);
print("<br>");
print_r($f);