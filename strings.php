<?php
print("Hola, como estas?");
$a = 3;
print("<br>Hola, que tal el clima? Hoy hacen $a grados <br>");
$b = "Somos 4";
print("Hola, cuantos son? " . $b . "<br>");
print(str_replace("Somos", "Estamos", $b) . "<br>");
print(str_ireplace("somos", "Estamos", $b) . "<br>");
print(str_repeat("Wow ",10) . "<br>");
print(strlen($b) . "<br>");
print(strpos($b, "Somos") . "<br>");
print(strtoupper($b) . "<br>");
$c = "I´M IN UPPER CASE";
print(strtolower($c) . "<br>");
print(substr($c, 4) . "<br>");
