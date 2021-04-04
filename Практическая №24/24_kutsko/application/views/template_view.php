<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>WM Главная</title>
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
        <script src="/js/script.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo" onclick="return location.href = '/'">
				</div>
				<div id="menu">
					<ul>
						<li><a href="/">Главная</a></li>
						<li><a href="/rent/page/1">Список</a></li>
						<li><a href="/rent/addPost">Добавить пост</a></li>
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<div id="sidebar">
					<div class="side-box">
						<h3>Основное меню</h3>
						<ul class="list">
							<li><a href="/">Главная</a></li>
							<li><a href="/rent/page/1">Список</a></li>
							<li><a href="/rent/addPost">Добавить пост</a></li>
						</ul>
					</div>
				</div>
                
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			
		</div>
		<div id="footer">
			<a href="/">WM Тест</a></a>
		</div>
	</body>
</html>