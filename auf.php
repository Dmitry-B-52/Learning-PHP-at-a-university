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


<a href="" title="Зарегистрироваться">Регистрация</a></span><span class="contact"><a href="" title="Войти">Вход </a>
		</span></span>

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

<style>
	 .regist {  font-family: Comic Sans MS, sans-serif;
             display: flex;
          justify-content: center;
            align-items: center;
            height: 70vh;
            background-color: #f7f7f7;}

.forma_reg {width: 280px;
            padding: 28px;
            border-radius: 12px;
            box-shadow: 0 3px 14px #ccc;
            background-color: white;
            font-size: 18px;}

.input_reg {
            width: 100%;
            border: none;
            border-bottom: 1px solid silver;
            border-top: 1px solid silver;
            background-color: transparent;
            outline: none;
        }

 .knopka_reg {
   padding: 5px 20px;
            border: none;
            border-radius: 5px;
            color: black;
            background-color: #A99999;
            transition: 0.3s;
 }                   

.knopka_reg:hover {
    background-color: #FFDFDF;
            color: black;
            box-shadow: 0 3px 7px #ccc;
}
</style>


<?php 
require 'db.php';
$data = $_POST;
if (isset($data['do_login'])) {
	$errors = array();
	$user = R::findOne('users', 'login = ?', array($data['login']));
	if($user) {
       // логин существует
		if(password_verify($data['password1'], $user->password)) {
           // все верно логинем 
			$_SESSION['logged_user'] = $user;
			echo '<div style= "color: green;">Вы успешно авторизованы!<br/> Можете вернуться на <a href="index.php">главную</a> страницу! </div><hr>';
		} 
		else {
		   $errors[] = 'Неверный пароль!';}
	} 
	else {
		$errors[] = 'Пользователь с таким логином не найден!';
	}

	if( ! empty($errors)){
		echo '<div style= "color: red;">'.array_shift($errors).'</div><hr>';
		}
}


 ?>


<div class="regist">

		<form action="auf.php" class = "forma_reg" method="post">
			<p>Введите логин: <input class = "input_reg" name="login" type="text" value="<?php echo @$data['login']; ?>"></p>
			<p>Введите пароль: <input class = "input_reg" name="password1" type="password" value="<?php echo @$data['password1']; ?>"></p>
			<p><a href="">Забыли пароль?</a></p>
			<p><button class = "knopka_reg" type="submit" name="do_login" >Войти</button></p>
		</form>
	</div>
	<footer>
		<span class="left">Все права защишены &copy; 2020</span>
	</footer>
	
</body>
</html>