<?php
	if(isset($_POST['login']) && !empty($_POST['login']) ) {
		
		$login = $_POST['login'];
		$mysqli = new mysqli('localhost', 'root', 'IfLebDNk57t', 'gr_91');	
		if($mysqli->connect_error){
			die('Error');
		} 
		$mysqli->set_charset('utf8');
		echo "<div id='us_item'> " ;
            $str_query = "SELECT * FROM `users` WHERE `login` LIKE '%$login%' AND `id_group` = 2";
            if(isset($_POST['ids']) && count($_POST['ids'])){
				$str_ids = implode(',', $_POST['ids']);
				$str_query .= " AND  `id` NOT IN ($str_ids)";
            }
            $res_users = $mysqli->query($str_query);
            if($res_users->num_rows){
                while( $row = $res_users->fetch_assoc()){
                    echo "<p onclick='addCheck(".$row['id'].", \"".$row['login']."\");'>".$row['login']."</p><br/>";
                }
            }
        echo "</div>";

	}
?>