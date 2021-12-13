<?php
if(date("l") == "Monday"){
    echo "We are on Monday";
};
echo "<br>";
if(date("F") == "October"){
    echo "We are in October";
} else {
  echo  (date("F"));
};
echo "<br>";
if(date("i") < 10){
    echo "The current minute is less than 10";
} else if (date("i") > 15){
echo "The current minute is more than 15";
}
else {
    echo "Does not meet any conditions";
};
echo "<br>";
$week = date("l");

switch ($week) {
    case "Monday":
        echo "Mondays are good";
        break;
    case "Tuesday":
        echo "Today is Tuesday my dude";
        break;
    case "Wenesday":
        echo "Today is Tuesday my dude";
        break;
    case "Thursday":
        echo "Today is Tuesday my dude";
        break;
    case "Friday":
        echo "Today is Tuesday my dude";
        break;
    default:
        echo "It is the weekend";
};
