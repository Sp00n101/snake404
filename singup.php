<?php 
session_start();
$connect=mysqli_connect("localhost","e93831vi_snake","danil05092003!","e93831vi_snake");

$email=$_POST['email'];
$password=$_POST['password'];

$check_user = mysqli_query($connect,"SELECT * FROM users WHERE `email`= '$email' AND `password`='$password'");
$user=mysqli_fetch_assoc($check_user);
if(count($user)!=0){
	$_SESSION['user']=[
	'id'=>$user['id'],
	'nickname'=>$user['nickname'],
	'email'=>$user['email'],
	'file'=>$user['file']
	];
	header('Location: /index.php ');
}
else {
	$_SESSION['massege']="Неправильный логин иди пароль";
	header('Location: /login.php ');
}



?>
