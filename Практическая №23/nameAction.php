<?php
	$res = simplexml_load_file("https://www.cbr-xml-daily.ru/daily_utf8.xml");
	$name = [];
	for($i = 0; $i < count($res->Valute); $i++){
		$name[] = $res->Valute[$i]->CharCode;
	}
	echo json_encode($name);
?>