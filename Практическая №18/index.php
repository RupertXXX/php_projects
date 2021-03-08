<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<title>Темы</title>
	</head>
	<body>
		<style>
			a {
				margin: 20px 0 0 15px;
			}
			.active{
				font-weight: 600;
			}
		</style>
		<p>Темы: </br>
		<div>
			<?php 
				$mysqli = new mysqli('localhost', 'root', 'IfLebDNk57t', 'gr_91');
				if($mysqli->connect_error){
					die('Error');
				}
				$mysqli->set_charset('utf8');
				$count = 3;
				$page = 0;
				if(isset($_GET['page'])){
					$page = $_GET['page'] - 1;
				}
				$page *= $count;
				$str_query = "SELECT * FROM `themes` INNER JOIN `users` ON (`themes`.`id_author` = `users`.`id`) WHERE `themes`.`is_active` = 1 ORDER BY `date` ASC";
				$str_query_row = $str_query. " LIMIT $page, $count";
				$res_count = $mysqli->query($str_query);
				$count_themes = $res_count->num_rows;
				if($count > 0) :
					$res = $mysqli->query($str_query_row);
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
					$count_page = floor($count_themes / $count);
					if($count_themes % $count > 0) {
						$count_page++;
					}
					echo '<div class="col-sm-12 pagination">';
						for($i = 1; $i <= $count_page; $i++)
						{
							if($i == $_GET['page']) {
								echo "<a href='/18/index.php?page=$i' class='active'>$i</a>";
							}
							else {
								echo "<a href='/18/index.php?page=$i'>$i</a>";
							}
						}
					echo '</div>';
				endif;
			?>
		</div>
	</body>
</html>