<?php 

	$start_arr = array (4, 8, 15, 16, 23, 42);
	$ran = rand (1, 50);
	
	echo ("Start array: ");
	foreach ($start_arr as $value) echo($value. ", ");
	echo("<br>Random number: ". $ran. "<br>");
	
	function sorting($start_arrf, $ranf)
	{
		$sort_arr = array();
		foreach($start_arrf as $value)
		{
			$sort_arr[$value] = abs($value - $ranf);
		}
		
		asort($sort_arr);
		$sort_arr = array_keys($sort_arr);
		
		return $sort_arr;
	}
	
	$start_arr = sorting($start_arr, $ran);
	
	echo "Sorted array: ";
	foreach ($start_arr as $value) echo "$value ";

?>