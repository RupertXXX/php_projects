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
			<p><label for="birthdate"> Birthdate: </label><input type="date" name="birthdate"></p>
			<p><label for="gender"> Gender: </label></p>
			<input type="radio" name="gender" value="Male"> Male
			<input type="radio" name="gender" value="Female"> Female
			
			<p><label for="group"> Group: </label></p>
			<input type="radio" name="group" value="81"> 81 
			<input type="radio" name="group" value="82"> 82 
			<input type="radio" name="group" value="83"> 83 
			
			<p>
				<label for="country"> Your country: </label>
				<select name="country" >
					<option value="Russia"> Russia </option>
					<option value="U.S.A."> U.S.A. </option>
					<option value="France"> France </option>
					<option value="China"> China </option>
					<option value="Japan"> Japan </option>
					<option value="Ukraine"> Ukraine </option>
				</select>
			</p>
			<p><label for="address"> Address: </label><input type="text" name="address"></p>
			<p><label for="phone"> Telephone: </label><input type="tel" name="phone"></p>
			<p><label for="mail"> Email: </label><input type="email" name="mail"></p>
			<label for="hobbies[]"> Hobbies: </label>
			<p><input type="checkbox" name="hobbies[]" value="Bike"> Bike </p>
			<p><input type="checkbox" name="hobbies[]" value="Computer games"> Computer games </p>
			<p><input type="checkbox" name="hobbies[]" value="Hang out"> Hang out </p>
			<p><input type="checkbox" name="hobbies[]" value="Music"> Music </p>
			<p><input type="checkbox" name="hobbies[]" value="Other"> Other </p>
			<p><br><input type="submit" value="LFG" name="LFG"></p>
		</form>

		<?php
			class Form {
				
				private $err = [];
				private $data = [];
				private $year_count;
				
				function calculate_age($birthday) {
				  $birthday_timestamp = strtotime($birthday);
				  $age = date('Y') - date('Y', $birthday_timestamp);
				  if (date('md', $birthday_timestamp) > date('md')) {
					$age--;
				  }
				  return $age;
				}
				
				function Check(){
					$this->year_count = $this->calculate_age(($_POST['birthdate']));
					
					if(isset($_POST['surname'])) $this->data[0]=($_POST['surname']);
					if(isset($_POST['name'])) $this->data[1]=($_POST['name']);
					if(isset($_POST['lastname'])) $this->data[2]=($_POST['lastname']);
					
					if(!empty($_POST['LFG']))
					{
						if (empty($err)) {
							if( (empty($_POST['surname'])) ||
							(empty($_POST['name'])) ||
							(empty($_POST['lastname'])) || 
							(empty($_POST['birthdate'])) ||
							(empty($_POST['group'])) ||
							($year_count < 20 && $_POST['group'] == 81) ||
							($year_count > 17 && $_POST['group'] == 82)
							)
							{
								echo($this->year_count. "<br>");
								$this->err[] = "ERROR!<br>ERROR!<br>ERROR!<br>";
							}
						}
					}
				}
				
				function Write(){
					if (empty($this->err)) {
						echo ("Surname: ". $_POST['surname']. "<br>");
						echo ("Name: ". $_POST['name']. "<br>");
						echo ("Lastname: ". $_POST['lastname']. "<br>");
						echo ("Birthdate: ". $_POST['birthdate']. " (". $this->year_count. " years old)<br>");
						echo ("Gender: ". $_POST['gender']. "<br>");
						echo ("Group: ". $_POST['group']. "<br>");
						echo ("Country: ". $_POST['country']. "<br>");
						echo ("Address: ". $_POST['address']. "<br>");
						echo ("Phone: ". $_POST['phone']. "<br>");
						echo ("Mail: ". $_POST['mail']. "<br>");
						echo ("Hobbies:<br>");
						
						foreach($_POST['hobbies'] as $a)
						{
							echo($a. "<br>");
						}
					}
					else{
						foreach ($this->err as $value) echo "$value</br>";
					}
				}
				function Writef(){
					if (empty($this->err)) {
						$fp = fopen ('data/profiles.json', 'a+');
						file_put_contents ('data/profiles.json', print_r ($this->data[0]. " ". $this->data[1]. " ". $this->data[2], true), FILE_APPEND);
						fwrite ($fp, PHP_EOL);
						file_put_contents ('data/profiles.json', print_r ($_POST, true), FILE_APPEND);
						fwrite ($fp, "END");
						fwrite ($fp, PHP_EOL);
						fclose ($fp);
						echo "Данные записаны!";
					}
					else{
						foreach ($this->err as $value) echo "$value</br>";
					}
				}
			}
			
			$form = new Form();
			if (!empty($_POST)) {
				$form->Check();
				$form->Write();
				$form->Writef();
			}
		?>
	</body>
</html>