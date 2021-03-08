<?php
	$err = []; //массив с ошибками
	$data = []; //массив с данными
	
	if(isset($_POST['login'])) $data[0] = ($_POST['login']);
	if(isset($_POST['password'])) $data[1] = ($_POST['password']);

	if (empty($data[0]) && $data[0] = ' ') 
		$err[] = "Ошибка: Пустой логин.";
	if (empty($data[1]) && $data[1] = ' ') 
		$err[] = "Ошибка: Пустой пароль.";
		
	if (empty($err)) {
		$pass = md5($data[1]);
		$fp = fopen ('data/account.json', 'r');
		$yes = 0;
		// echo "Попытка входа...</br>Логин: $data[0]</br>";
		while (!feof($fp)) {
			$a = fgets ($fp);
			if (strpos($a, $data[0]) !== false) {
				$a = fgets ($fp);
				if (strpos ($a, $pass) !== false) {
					// echo "Успешный вход.</br>";
					$yes = 1;
				}
			}
		}
		if ($yes != 1) echo "Неправильный логин или пароль.";
		else {
			session_start();
			$_SESSION["user"] = "$data[0]";
		}
		if(isset($_SESSION["user"])) echo ("Текущая сеессия от имени: ". $_SESSION["user"]);
		fclose($fp);
	}
	
	else foreach ($err as $value) echo "$value</br>";
?>