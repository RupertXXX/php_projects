<?php
	if(!empty($_POST['value'])) :
		$mysqli= new mysqli('localhost', 'root', 'IfLebDNk57t', 'gr_91');
		if($mysqsli->connect_error){
			die('Error');
		}
		$val = $_POST['value'];
		$mysqli->set_charset('utf8');
		$queryis = "SELECT * FROM `themes` INNER JOIN `users` ON (`themes`.`id_author` = `users`.`id`) 
			WHERE `name` LIKE '%$val%' AND `themes`.`is_active` = 1 ORDER BY `date` ASC";
		$res = $mysqli->query($queryis);
		if($res->num_rows) :
			while($row = $res->fetch_assoc()) :
				?>
				<div class="col-sm-12 one_themes">
					<div class="col-sm-8 title"><?= $row['name'] ?></div>
					<div class="col-sm-4 date_author">
						<div class="col-sm-12 date"><?= $row['date'] ?></div>
						<div class="col-sm-12 author"><?= $row['login'] ?></div>
					</div>
				</div>
				<?php
			endwhile;
		endif;
	endif;
?>