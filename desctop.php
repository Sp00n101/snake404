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
            </div>
        </nav>

    <p class="pp">Управление осуществляется при помощи кнопок "WASD". Чтобы начать играть нажмите любую из этих клавиш.</p>
    
  <br> <button class="p" onclick="pause(0)">Пауза</button><button class="p" onclick="pause(1)">Продолжить</button><br> 
    
   
	
        <canvas id="canvas" width="630" height="630"></canvas><br>
        
        
        

    </div>
</body>
</html>
</body>
<script src="game.js"></script>
</html>