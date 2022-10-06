<?php
session_start();
$connect=mysqli_connect("localhost","e93831vi_snake","danil05092003!","e93831vi_snake");

$email=$_POST['email'];
$nickname=$_POST['nickname'];
$password=$_POST['password'];
$password1=$_POST['password1'];


$check_mail = mysqli_query($connect,"SELECT * FROM users WHERE `email`= '$email'");
$mail=mysqli_fetch_assoc($check_mail);
if(count($mail)!=0){
	$_SESSION['massege']="Аккаунт с такой почтой уже есть.";
	header('Location: login.php');
	exit();
}


$check_nick = mysqli_query($connect,"SELECT * FROM users WHERE `nickname`= '$nickname'");
$nick=mysqli_fetch_assoc($check_nick);
if(count($nick)!=0){
	$_SESSION['massege']="Этот nickname уже занят.";
	header("Location: regist.php?email=$email");
	exit();
}



$_FILES['file'] ;
$path='avatarka/'.time().$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], $path);
if ($_FILES['file']['name']===''){
	$path="avatarka/zlejfotnggndpfdfjf75nf7nf7f5rjrot8jg9j5k5t.jpg";
}


if($nickname===""){
	$_SESSION['massege']="Вы не ввели nickname";
	header("Location: regist.php?email=$email");
	exit();
}
if(strlen($nickname)<3){
	$_SESSION['massege']="Ваш nickname слишком короткий, минимальная длина 4";
	header("Location: regist.php?email=$email");
	exit();
}
if(strlen($nickname)>15){
	$_SESSION['massege']="Ваш nickname слишком длинный, максимальная длина 15";
	header("Location: regist.php?email=$email");
	exit();
}
if($password===""){
	$_SESSION['massege']="Вы не ввели пароль";
	header("Location: regist.php?email=$email");
	exit();
}
	if(strlen($password)<4){
	$_SESSION['massege']="Ваш пароль слишком короткий, минимальная длина 5";
	header("Location: regist.php?email=$email");
	exit();
	}
if($password1===""|| $password1!=$password){
	$_SESSION['massege']="Вы не подтвердили пароль или пароли не совпадают";
	header("Location: regist.php?email=$email");
	exit();
}

if(mysqli_query($connect, "INSERT INTO users (`id`,`email`, `nickname`,`password`,`file`) VALUES ('NULL','$email','$nickname', '$password','$path')")){
	$_SESSION['massege']="Регистрация прошла успешно";
	header('Location: login.php');
}else{
	echo("Произошла странная ошибка, обратитесь к разработчику. Контакты есть на странице информации.");
}






?>