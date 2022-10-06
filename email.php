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
	
	<form action="test.php" method="post" enctype="multipart/form-data">
	
	<label>Введите Email, на него придёт ссылка для регистрации.</label>
	<input name="email" type="email" placeholder="Введите ваш email">
		<button>Войти</button>
	<p>У Вас есть аккаунт? - <a href="login.php">Авторизируйтесь</a></p>
	<?php if($_SESSION["massege"]){echo "<p>".$_SESSION["massege"]."</p>";unset($_SESSION["massege"]);}?>
	</form>
	
</body>
</html>