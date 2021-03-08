<!DOCTYPE html>​
<html lang="eng">​
	<head>
		<meta charset="utf-8">
		<title>form php</title>
	</head>
	<body>​
		<form action="" method="post" enctype="multipart/form-data">​
			<label for="fileToUpload">Choose your image:</label>
			<p><input type="file" name="pictures[]" id="fileToUpload" multiple />​</p>
			<p><input type="submit" value="Upload Image" name="submit" />​</p>
		</form>​
		<?php
			if(isset($_POST["submit"])) {
				if((count($_FILES["pictures"]) >= 11) || (count($_FILES["pictures"]) <= 13))
				{
					foreach($_FILES["pictures"]["error"] as $key => $error)
					{
						if($error == UPLOAD_ERR_OK)
						{
							$tmp_name = $_FILES["pictures"]["tmp_name"][$key];
							$name = $_FILES["pictures"]["name"][$key];
							
							move_uploaded_file($tmp_name, "uploads/". $name);
						}
					}
				}
				else echo("Another count of files.");
			}
		?>
	</body>
</html>​