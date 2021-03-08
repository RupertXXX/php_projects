<?php

$firstVariable = "string";
$number = 42;
$secondVariable = TRUE;
$secondNumber = 33.1221;
$array = array(
    "1" => "1",
    "2" => "4",
	"3" => "8",
);

echo "1:". gettype($firstVariable). "<br>";
echo "2:". gettype($number). "<br>";
echo "3:". gettype($secondVariable). "<br>";
echo "4:". gettype($secondNumber). "<br>";
echo "5:". gettype($array). "<br>";

?> 