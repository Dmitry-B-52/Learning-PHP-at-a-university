<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Авторизация	</title>
	<style>	
		
	body {
			font-family: Comic Sans MS, sans-serif;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			background-color: #f7f7f7;}
	form {
			width: 280px;
			padding: 28px;
			border-radius: 12px;
			box-shadow: 0 3px 14px #ccc;
			background-color: white;
			font-size: 18px;
		}

		form input{
			width: 100%;
			border: none;
			border-bottom: 1px solid silver;
			border-top: 1px solid silver;
			background-color: transparent;
			outline: none;
		}
		.knopka {
			padding: 5px 20px;
			border: none;
			border-radius: 5px;
			color: black;
			background-color: #A99999;
			transition: 0.3s;
			
		}
		.knopka:hover {
			background-color: #FFDFDF;
			color: black;
			box-shadow: 0 3px 7px #ccc;
		}

	</style>
</head>
<body>
	<div class="container">

		<?php 
			if($errors){
				foreach ($errors as $error) {
					echo $error;
				}

			}
				
		 ?>	
		<form method="post">
			<p>Логин: <input name="login" type="text"></p>
			<p> Пароль: <input name="password" type="password"></p>
			<p><input class = "knopka" type="submit" value="Войти"></p>
		</form>
	</div>
</body>
</html>