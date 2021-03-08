<?php 
	function translater($badstring)
	{
		$badstrings = explode(" ", $badstring);

		$badstrings[0] = mb_strtolower($badstrings[0]);
		
		$almostgoodstrings1 = mb_str_split($badstrings[0]);
		$almostgoodstrings1[0] = mb_strtoupper($almostgoodstrings1[0]);
		$almostgood1 = implode('', $almostgoodstrings1);
		
		$almostgoodstrings2[0] = mb_substr($badstrings[1], 0, 1);
		$almostgoodstrings2[1] = mb_substr($badstrings[2], 0, 1);
		$almostgoodstrings2[0] = mb_strtoupper($almostgoodstrings2[0]);
		$almostgoodstrings2[1] = mb_strtoupper($almostgoodstrings2[1]);
		$almostgoodstrings2[2] = '';
		
		$almostgood2 = implode('.', $almostgoodstrings2);
		$goodstrings[0] = $almostgood1;
		$goodstrings[1] = $almostgood2;
		
		$goodstring = implode(' ', $goodstrings);
		
		return $goodstring;
	}

	$a = 'иВАнов иВаН ИваНоВИч';
	echo(translater($a));

?>