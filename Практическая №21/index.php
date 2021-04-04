<?php
	session_start(); 
	$mysqli = new mysqli('localhost', 'root', 'IfLebDNk57t', 'gr_91');	
    if ($mysqli->connect_error){
        die('Error');
    } 
    $mysqli->set_charset('utf8');
	if(!empty($_POST['title']) && count($_POST['perm'])) {
		$id = $_SESSION['id'];
		$title = $_POST['title'];
		$date = date('Y-m-d');
		if($mysqli->query("INSERT INTO `themes` (`id`, `id_author`, `name`, `date`, `is_active`) VALUES (NULL, '$id', '$title', '$date', 1)")){
			$ins_id = $mysqli->insert_id;

			foreach($_POST['perm'] as $item) {
				$mysqli->query("INSERT INTO `permission` (`id`, `id_users`, `id_themes`) VALUES (NULL, '$item', '$ins_id')");
			}
			echo "Тема добавлена";
		}
	}
?>
<html >
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/custom.css" />
		<script src="js/jquery-3.5.1.min.js"></script>
		<script src="js/script.js"></script>
	</head>
	<body>
		<div class="container_page">
			<form action="" method="POST">
				<input type="text" id="title" name="title" value="" />
				<p>Пользователи, которым разрешено комментировать: </p>
				<input type="text" name="user" value="" placeholder="Введите логин пользователя" id="inputlog" oninput="searchUser()" /> 
				<div id="users" class="col-sm-12"></div>
				<div id="permission"></div>
				<input type="submit" value="add" />
			</form>
		</div>
	</body>
</html>










