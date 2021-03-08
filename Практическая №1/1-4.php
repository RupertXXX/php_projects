<?php

$number = 42;
$string = "33";

$a = gettype($number);
$b = gettype($string);

$result = ($a == $b) ? "Same types" : "Not same types";

echo ($result . ":<br>");
echo ($a. "<br>");
echo ($b. "<br>");

?> 