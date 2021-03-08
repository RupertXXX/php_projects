<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<script src="jquery-3.5.1.min.js"></script>
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
			input{
				outline: none;
				margin: 20px 0 0 30px;
			}
			p{
				margin: 20px 0 0 30px;
			}
		</style>
		<input class="search" name="search" oninput="trySend(this)" type="search"> Поиск
		<p>Темы: </br>
		<div id="cont"></div>
		<script src="script.js" ></script>
	</body>
</html>