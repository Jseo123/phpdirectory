<?php
$a ="I´m a string";
$b = 7892;
$c = 9.6;
$d = false;

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }

  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new car("red", "Toyota");
  echo $myCar -> message();

  $f = array("Blue", "White", "Red", "Black");
  $g = NULL;

  echo ("<br> $a <br> $b <br> $c<br>");
  print_r($f);
  echo "<br>";
  echo (var_dump($d));
  echo "<br>";
  echo (var_dump($g));
