<!DOCTYPE html>​
<html lang="eng">​
	<head>
		<meta charset="utf-8">
		<title>form php</title>
	</head>
	<body>​
		<form action="" method="post" enctype="multipart/form-data">​
			<label for="fileToUpload">Choose your image:</label>
			<p><input type="file" name="fileToUpload" id="fileToUpload" />​</p>
			<p><input type="submit" value="Upload Image" name="submit" />​</p>
		</form>​
		<?php
			if(isset($_POST["submit"])) {
				$target_dir = "uploads/";
				echo("target_dir:  ". $target_dir. "<br>");
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				echo("target_file:  ". $target_file. "<br>");
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				echo("imageFileType:  ". $imageFileType. "<br>");
				// Check if image is real or fake
				if(isset($_POST["submit"])) {
					$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
						echo("<pre>");
						echo("check:  <br>");
						print_r($check);
						echo("<pre>");
					if($check !== false) {
						echo "File is an image - " . $check["mime"] . ".";
						$uploadOk = 1;
					} else {
						echo "This is not an image file. Please upload another.";
						$uploadOk = 0;
					}
				}
				echo("<pre>");
				echo("_FILES:  <br>");
				print_r($_FILES);
				echo("<pre>");
			}
		?>
	</body>​
</html>​