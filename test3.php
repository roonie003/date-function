<?php

date_default_timezone_set ('Africa/Johannesburg');

echo "Today is " . date('l');

echo "<br>";

echo date ('l d F, Y');

echo "<br>";

echo date ('Y/m/j');

echo "<br>";

echo date('l jS F Y, g:i A');

echo "<br>";


if (date('L') == 1){
    echo "This year is a leap year ";
} else {
    echo " This year is not a leap year";
}

