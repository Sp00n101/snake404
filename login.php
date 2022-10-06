<?php
session_start();

?>
<!doctype html5>
<html>
<head>
<meta charset="utf-8">
<title>snake404</title>
<link rel="stylesheet" href="style1.css">
</head>

<body class="bo">
	<form action="singup.php" method="post">
	<label>Email</label>
	<input name="email" type="email" placeholder="Введите ваш email">
	<label>Пароль</label>
	<input name="password" type="password" placeholder="Введите ваш пароль">
	<button>Войти</button>
	<p>У Вас нет аккаунта? - <a href="email.php">Зарегистрируйтесь </a></p>
	<?php if($_SESSION["massege"]){echo "<p>".$_SESSION["massege"]."</p>";unset($_SESSION["massege"]);}?>
	</form>
	
</body>
</html>