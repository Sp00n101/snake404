<?php
session_start();
$email=$_GET['email'];
if(count($email)===0){
	$_SESSION['massege']="Аккаунт с такой почтой уже есть.";
	header('Location: index.php');
	exit();
}
?>
<!doctype html5>
<html>
<head>
<meta charset="utf-8">
<title>snake404</title>
<link rel="stylesheet" href="style1.css">
</head>

<body class="bo">
	
	<form action="control.php" method="post" enctype="multipart/form-data">
	
	<label>Email</label>
	<input name="email" type="email" readonly="readonly" value="<?php echo ($email); ?>">
		<label>Nickname</label>
	<input name="nickname" type="text" placeholder="Придумайте nickname">
		<label>Аватарка</label>
	<input name="file" type="file" >
		<label>Пароль</label>
	<input name="password" type="password" placeholder="Придумайте пароль">
		<label>Повторите пароль</label>
	<input name="password1" type="password" placeholder="Повторите пароль">
	<button>Зарегистрироваться</button>
	<p>У Вас есть аккаунт? - <a href="login.php">Авторизируйтесь</a></p>
	<?php if($_SESSION["massege"]){echo "<p>".$_SESSION["massege"]."</p>";unset($_SESSION["massege"]);}?>
	</form>
	
</body>
</html>