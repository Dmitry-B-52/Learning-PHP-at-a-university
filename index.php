<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="test site">
	<meta name="description" content="Пробный сайт">
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="site-icon.png">
	<title>Film@Critic</title>
	
</head>
<body>
	<div id="page-wrap">
	<header>
		<a href="" title="На главную" id="logo">Film@Critic</a> <span class="contact"><a href="" title="Информация о сайте">О нас</a></span><input type="search" class="field" placeholder="Найти..."> <span class="right"><span class="contact">
<body>

<?php 
require 'db.php';
 ?>

 <?php if(isset($_SESSION['logged_user'])) : ?>
<?php echo $_SESSION['logged_user']->login; ?>
<hr>
<a href="logout.php">Выйти</a>

<?php else : ?> 


<a href="reg.php" title="Зарегистрироваться">Регистрация</a></span><span class="contact"><a href="auf.php" title="Войти">Вход </a>
		</span></span>

	<?php endif; ?>

		<script type="text/javascript">
 function clock() {
 var block = document.getElementById('clockdiv');
 thistime = new Date();
 var hours=thistime.getHours(); 
 var minutes=thistime.getMinutes();
 if (eval(hours) <10) {hours="0"+hours};
 if (eval(minutes) < 10) {minutes="0"+minutes};
 thistime = hours+":"+minutes;
 block.innerHTML = thistime; 
 var timer = setTimeout("clock()", 500);
}
</script>

<span>
<body onLoad="clock()">
<div id="clockdiv" style="color:black; font-size:25pt;margin-left:1270px;top:100px;position:absolute;top:40px;font-family:Comic Sans MS,sans-serif; "></div>
</body>
</span>

	</header>	
<div class="clear"><br/></div>
<center>
	<div id="menu">Разделы<hr></div>
	<div id="menuHrefs">
		<a href="">Топы</a>
		<a href="">Подборки</a>
		<a href="">Публикации</a>
		<a href="">О сайте</a>
		<a href="">Обратная связь</a>


	</div>

</center>
<div class="clear"><br/></div>
<aside class="poisk">
	<center><span>Поиск фильмов</span>
	<p><b>Название</b><br>
	<input type="search" placeholder="Введите название... ">
	<p><b>Год</b><br>
	<input type="search" placeholder="Введите год...">
	<p><b>Жанр</b><br>
	<input type="search" placeholder="Введите жанр...">
	<form action="" method="post"><input type="submit" value="Найти" id= "send" name="send">
	</form>
</center>
</aside>

<aside class="enter">
	<center><span>Авторизация</span>
	<p><b>Логин</b><br>
	<input type="text" placeholder="Введите логин... ">
	<p><b>Пароль</b><br>
	<input type="text" placeholder="Введите пароль... ">
	<form action="" method="post"><input type="submit" value="Войти" id= "ent" name="ent">
	<a href="">Забыли пароль?</a>
	
	</form>
</center>
</aside>
<div class="clear"><br/></div>







<div class="clear"><br/></div>
<center><div class="news1">
	<center><span>Оскар, но за что?<hr></span></center>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, quaerat quibusdam pariatur laudantium odio cum soluta adipisci, dolores illo, molestias necessitatibus. Quis dignissimos, soluta repellat deserunt alias vitae iste saepe amet ducimus, velit harum, eligendi optio excepturi repudiandae est porro error dolore ea expedita architecto veritatis voluptatem autem incidunt natus dolor! Modi quisquam sunt voluptatum veritatis deserunt rem nesciunt quam aut illo labore eligendi ea dolorum laborum, asperiores doloribus omnis quos accusantium assumenda fuga alias perspiciatis atque incidunt aliquid voluptatem molestiae. Velit ab veritatis quis repellendus veniam, error. Dicta, totam consequuntur possimus, quia maxime consequatur iure ea quisquam saepe vel!</p>
<img src="питт.jpg" alt="Брэд Питт">
</div>


	<footer>
		<span class="left">Все права защишены &copy; 2020</span>
	</footer>
	
</body>
</html>