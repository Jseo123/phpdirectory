<?php

echo "For loop <br>";
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  };

  print("Foreach <br>");

  $a = array("Alina"=>"21", "Alexa"=>"24", "Ana"=>"18");
  foreach ($a as $x=> $val){
      echo "$x is  $val  years old<br>";
  }

echo "While loop <br>";

  $x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

echo "Do while <br>";
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

?>