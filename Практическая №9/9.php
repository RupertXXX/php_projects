<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>form php</title>
	</head>
	<body>
		<style>
			
		</style>
		<h2> Today <?php echo date('d.m.Y'); ?> </h2>
		
		<form action="" method="post">
			<p><label for="surname"> Surname: </label><input type="text" name="surname"></p>
			<p><label for="name"> Name: </label><input type="text" name="name"></p>
			<p><label for="lastname"> Lastname: </label><input type="text" name="lastname"></p>
			<p><input type="submit" name="sub" value="Поиск"></p>
		</form>

		<?php
			$data = [];
			
			if(isset($_POST['surname'])) $data[0]=($_POST['surname']);
			if(isset($_POST['name'])) $data[1]=($_POST['name']);
			if(isset($_POST['lastname'])) $data[2]=($_POST['lastname']);
			
			if(!empty($_POST['sub'])) {
				if (empty($err)) {
					$fio = implode ($data, ' ');

					// $f = "[surname] => ".$data[0];
					// $i = "[name] => ".$data[1];
					// $o = "[lastname] => ".$data[2];
					
					echo "Поиск по запросу: $fio";
					
					$fp = fopen ('data/profiles.json', 'r');
					$flag = 0;
					$num = 1;
					while(!feof($fp)) {
						$a = fgets ($fp);
						if (strpos($a, $fio) !== false){
							echo "Найдено на строке: $num<br>";
							$flag = 1;
						}
						// if (strpos($a, $i) !== false){
							// echo "Найдено на строке: $num<br>";
							// $flag = 1;
						// }
						// if (strpos($a, $o) !== false){
							// echo "Найдено на строке: $num<br>";
							// $flag = 1;
						// }
						$num++;
					}
	
					if ($flag != 1) echo "Ничего не найдено.";
					fclose ($fp);
				}
				
				else foreach ($err as $value) echo "$value<br>";
			}
		?>
		
	</body>
</html>