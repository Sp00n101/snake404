<?php

session_start();

?>

<!DOCTYPE html5>
<html>
    <head>
		<title>snake404</title>
		<meta charset="utf-8">
       <link rel="stylesheet" href="style1.css"> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    </head>
    <body>
        <nav>
            <div class="nav1">
                <div class="nav2">
                    <a class="nav3">Главная</a>
                    <a href=best.php class="nav3">Рейтинг</a>	
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
           
        </nav>

  <br> <button class="p" onclick="pause(0)">Пауза</button><button class="p" onclick="pause(1)">Продолжить</button>

        <canvas id="canvas" width="630" height="630"></canvas><br>
         <button class="p" onclick="fig(0)">Вверх</button> <br>
      <div class="p2"> <button class="p21" onclick="fig(2)">Влево</button><button class="p22" onclick="fig(3)">Вправо</button></div><br>
         <button class="p" onclick="fig(1)">Вниз</button>

    </div>
</body>
</html>
</body>
<script src="game1.js"></script>
</html>