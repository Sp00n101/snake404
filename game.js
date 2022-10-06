var os =200
         
var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');
var scoore=0;

var snake = []
snake[0]={
	x:10,
	y:10
}
            
            
var food={
   x: Math.floor(Math.random()*20),
   y: Math.floor(Math.random()*20)
                
   }

              var key=0
         function fig(w){
                
                 if (w==0 && key!=83){key=87}
                 if (w==1 && key!=87){key=83}
                 if (w==2 && key!=68){key=65}
                 if (w==3 && key!=65){key=68}


                }
                function pause(u){
                if(u==1){
                    clearInterval(game)
                    clearInterval(qwerty)
                    game=setInterval(start,os)
                    qwerty=setInterval(fps,16)}
                if(u==0){clearInterval(game)
                    clearInterval(qwerty)}
             }



            function fps(){
                ctx.clearRect(0,0, 630, 630)
              
                
            ctx.strokeRect(1,1, 628, 628)
            for (let i=0;  i<21; i++){
                for (let j=0; j<21; j++){
                    
                    ctx.fillStyle = 'rgba(0,255,205,1.00)'
                    
                    ctx.fillRect(30*i,30*j, 30, 30);
                    
                }

            }

            

            for(let i=0; i<snake.length; i++){
                if(i==0){ctx.fillStyle = 'rgba(250, 0, 0,1)'}
                else{
                ctx.fillStyle = 'rgba(70,140,140,1.00)'}
                ctx.fillRect(30*snake[i].x,30*snake[i].y, 30, 30);
            }
            
            ctx.clearRect(30*food.x,30*food.y, 30, 30)
            ctx.fillStyle = 'rgba(244,158,179,1.00)'
            ctx.fillRect(30*food.x,30*food.y, 30, 30);

            for (let i=0;  i<21; i++){
                for (let j=0; j<21; j++){
                    ctx.strokeRect(30*i,30*j, 30, 30)
                }

            }
        }
        function start(){

           var con=key
            document.addEventListener('keydown', function(event){
             key=event.keyCode
             if (key==87 && con==83){key=con}
             if (key==83 && con==87){key=con}
             if (key==65 && con==68){key=con}
             if (key==68 && con==65){key=con}
            });

            let snakeX=snake[0].x
            let snakeY=snake[0].y
            if (key==87){snakeY-=1}
             if (key==83){snakeY+=1}
             if (key==65){snakeX-=1}
             if (key==68){snakeX+=1}
             let snk = {
                x: snakeX,
                y: snakeY
             }
            if (snakeX==food.x && snakeY==food.y){
                scoore++
                food={
                x: Math.floor(Math.random()*20),
                y: Math.floor(Math.random()*20)         
            }
                for(let i=0;i<snake.length;i++){
            
                while(food.x==snake[i].x && food.y==snake[i].y){
                    food={
                x: Math.floor(Math.random()*20),
                y: Math.floor(Math.random()*20)         
            }
					i=0;
                }

                }
    
            }
            else{
                
                snake.pop()
            }
            snake.unshift(snk)
            
            for(let i=1; i<snake.length;i++){
                if (snakeX==snake[i].x && snakeY==snake[i].y){gameover()}
            }
            if (snakeX>20 || snakeX<0 || snakeY>20 || snakeY<0){
                gameover()
            }
             
             function gameover (){
clearInterval(game)
clearInterval(qwerty)
alert("Твой счёт: "+scoore+'!')
$.ajax({
url: 'scoore.php',
method: 'post',
data: {scoore: scoore },
success: function(){
location.reload();
}
});  
             }
		}
        var qwerty= setInterval(fps,16)
        var game = setInterval(start,os)