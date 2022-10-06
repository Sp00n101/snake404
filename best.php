<?php
$connect=mysqli_connect("localhost","e93831vi_snake","danil05092003!","e93831vi_snake");

$rating_sql = mysqli_query($connect,"SELECT * FROM rating");
?>

<!doctype html5>
<html>
<head>
<link rel="stylesheet" href="style1.css"> 
<meta charset="utf-8">
<title>snake404</title>
</head >

<body>
	<nav>
            <div class="nav1">
                <div class="nav2">
                    <a class="nav3" href="desctop.php">Главная</a>
                    <a class="nav3">Рейтинг</a>

				</div>
                    <div class="nav2">

                    <?php
						if($_SESSION["user"]){
							echo '<a class="nav4"><img width="50" src="';
							echo ($_SESSION['user']['file']);
							echo '"></a>';
						}else {
							echo '<a class="nav3" href="login.php">войти</a>';
						}?>
						
                    </div>
                </div>
            </div>
        </nav><br>
	<?php
	$num=1;
	 while ($rating = mysqli_fetch_array($rating_sql)){
		 echo '  <div class="nav1">
                <div class="nav2">
				<p>'.  $num .'  </p>
                    <img width="50" src="'.$rating ['file'].'">
					<p>'.$rating['nickname'].'</p>
				</div>
                    <div class="nav2">
						<p>'.$rating['score'].'</p>
						
                    
						
                    </div>
                </div>
            </div>';
		 $num=$num+1;
	 }
	
	?>
</body>
</html>