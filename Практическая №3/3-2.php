<?php
	function sum_main($my_array)
	{
		$sum = 0;
		for($i = 0; $i < count($my_array); $i++)
		{
			$sum += $my_array[$i][$i];
		}
		return $sum;
	}
	function sum_nomain($my_array)
	{
		$j = 0;
		$sum = 0;
		for($i = count($my_array) - 1; $i >= 0; $i--)
		{
			$sum += $my_array[$j][$i];
			$j++;
		}
		return $sum;
	}
	// создали массив для проверки и вывели его на экран
	for($i = 0; $i < 4; $i++)
	{
		for($j = 0; $j < 4; $j++)
		{
				$my_array[$i][$j] = rand(2, 8);
		}
	}
	foreach($my_array as $key)
	{
		echo("<br>");
		foreach($key as $mini_key)
		{
			echo ("{$mini_key} <br>");
		}
	}
	// вывод
	echo("<br>" . sum_main($my_array) . "<br>");
	echo(sum_nomain($my_array). "<br>");
?>