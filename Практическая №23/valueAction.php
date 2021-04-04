<?php
	$res = simplexml_load_file("https://www.cbr-xml-daily.ru/daily_utf8.xml");
	$value = [];
	for($i = 0; $i < count($res->Valute); $i++){
		$value[] = $res->Valute[$i]->Value;
	}
	echo json_encode($value);
?>