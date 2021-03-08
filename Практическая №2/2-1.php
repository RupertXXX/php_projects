<?php
	$age = rand(1, 70);
	echo ("{$age} <br>");
	if($age <= 35 && $age >= 18) echo ("Счастливчик!");
	elseif($age <= 17 && $age >= 1) echo ("Слишком молод");
	else echo ("Не повезло");
?>