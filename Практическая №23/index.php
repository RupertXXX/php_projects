<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/custom.css" />
		<script src="js/jquery-3.5.1.min.js"></script>
		<script src="js/script.js"></script>
	</head>
	<body onload="getList()">
		<div class="main">
			<form class="form_is" action="" method="POST">
				<div class="first">
					<input id="first_tex" class="first_tex" type="text" name="first_tex" onchange="calculate(this)" value="1" />
					<select id="first_sel" name="first_sel"onchange="calculate(this)"></select>
				</div>
				<div class="second">
					<input id="second_tex" class="second_tex" type="text" name="second_tex" onchange="calculate(this)" value="1" />
					<select id="second_sel" name="second_sel" onchange="calculate(this)"></select>
				</div>
			</form>
		</div>
	</body>
</html>