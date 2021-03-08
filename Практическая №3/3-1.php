<?php
	
	function translater($ten_number)
	{
		(int)$ten_number;
		$bin_number = '';
		while ($ten_number > 0)
		{
			$str = $ten_number % 2;
			$bin_number = (string)$str . $bin_number;
			$ten_number = (int)$ten_number / 2;
		}
		return $bin_number;
	}

	// создаём число для проверки
	$a = rand(1, 300);
	echo($a . "<br>");
	echo(translater($a));

?>