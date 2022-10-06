<?php
session_start();
$connect=mysqli_connect("localhost","e93831vi_snake","danil05092003!","e93831vi_snake");
$email=$_POST['email'];



if(count($email)===0){
	header("Location: email.php");
	$_SESSION['massege']="Вы не ввели email.";
	exit();
}



$check_mail = mysqli_query($connect,"SELECT * FROM users WHERE `email`= '$email'");
$mail=mysqli_fetch_assoc($check_mail);
if(count($mail)!=0){
	$_SESSION['massege']="Аккаунт с такой почтой уже есть.";
	header('Location: login.php');
	exit();
}





$subject = 'SNAKE404';
$message = '<a href="http://e93831vi.beget.tech/regist.php?email='.$email.'">Ссылка на регистрацию</a>';
$headers = 'From: danildemin0@gmail.com' . "\r\n" .
    'Reply-To: danildemin0@gmail.com' . "\r\n" .
	'Content-type: text/html;charset=utf-8\r\n';

mail($email, $subject, $message, $headers);
header("Location: login.php");
$_SESSION['massege']="На вашу почту отправленно письмо с ссылкой на регестрацию.";


?>