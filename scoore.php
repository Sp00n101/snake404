<?php
session_start();
if ($_SESSION['user']){
$scoore=$_POST['scoore'];
$today = date("Y-m-d");
$user_id=$_SESSION['user']['id'];
$connect=mysqli_connect("localhost","e93831vi_snake","danil05092003!","e93831vi_snake");
$scoore = mysqli_query($connect,"INSERT INTO games(`user_id`, `score`, `date`) VALUES ('$user_id','$scoore','$today')");
}



?>