<?php
	session_start(); 
	$mysqli = new mysqli('localhost', 'root', 'IfLebDNk57t', 'gr_91');

    if ($mysqli->connect_error){
        die('Error');
    } 

    $mysqli->set_charset('utf8');

	if(!empty($_POST['title'])) {
	
		$id = 1;
		$title = $_POST['title'];
		$date = date('Y-m-d');
		if($mysqli->query("INSERT INTO `themes` (`id`, `id_author`, `name`, `date`, `is_active`) VALUES (NULL, '$id', '$title', '$date', 1)")){
			$ins_id = $mysqli->insert_id;
			
			foreach($_POST['perm'] as $item) {
				$mysqli->query("INSERT INTO `permission` (`id`, `id_themes`, `id_users`) VALUES (NULL, '$ins_id', '$item')");
			}
			echo "Тема добавлена";
		}
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css" >
	</head>
	<body>		
		<div class="container page">
			<form action="" method="post">
				<input type="text" name="title" value=""><br><br>

				<?php
					$res = $mysqli->query("SELECT * FROM `users` WHERE `id_group` = 2");
					if($res !== false && $res->num_rows){
						while( $row = $res->fetch_assoc() ){
							echo "<input type='checkbox' id='p".$row['login']."' name ='perm[]' value='".$row['id']."'><label for='p".$row['login']."' >".$row['login']."</label><br>";
						}
					}
				?>
				<input type="submit" value="add">
			</form>
	</body>
</html>