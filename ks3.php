<!DOCTYPE html>
<html>
<head><title>Memory Game</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link href='https://fonts.googleapis.com/css?family=Fontdiner Swanky' rel='stylesheet'>
<style>
canvas {
           position:absolute;
        
           left:-8px;
           top:-20px;
        
           width:1100px;
           height:600px;
           z-index:-5;
        }
#transbox_won {
background-color: #ffffff;
z-index: 10;
font-size:100px;
width:1130px;
height:100%;
top:0px;
left:-8px;
position:absolute;
visibility:hidden;
}
#transbox_won p {
  margin: 10%;
  font-weight: bold;
  padding:5%;
font-family: 'Fontdiner Swanky';
opacity:0.6;
}
#chances {
  font-size:30px;
top:30px;
margin-left:1120px;
position:absolute;
font-family: 'Fontdiner Swanky';
opacity:0.6;
}
#restart {
  font-size:36px;
top:150px;
margin-left:1140px;
position:absolute;
font-family: 'Fontdiner Swanky';
opacity:0.6;
}
#level1 {
  font-size:40px;
top:250px;
margin-left:1130px;
position:absolute;
font-family: 'Fontdiner Swanky';
opacity:0.6;
}
#level2 {
  font-size:40px;
top:350px;
margin-left:1130px;
position:absolute;
font-family: 'Fontdiner Swanky';
opacity:0.6;
}
#level3 {
  font-size:40px;
top:450px;
margin-left:1130px;
position:absolute;
font-family: 'Fontdiner Swanky';
opacity:0.6;
}

#tile0,#tile1,#tile2,#tile3,#tile4,#tile5,#tile6,#tile7,#tile8,#tile9,#tile10,#tile11,#tile12,#tile13,#tile14,#tile15{
    width: 100px;
    height: 100px;
    margin: 10px;
    float: left;
    border: 2px solid;
    border-radius: 50px;
    text-align: center;
    font-size: 80px;
    box-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
#tile1 p{
margin-left =5px;
}
#container{
position:relative;
top:50px;
left:20vw;
width:500px;
height:auto;
opacity: 0.5;
 box-shadow: 5px 9px #999;
}
#container2{
position:relative;
margin:auto auto;
width:100%;
height:auto;
}
a{
color:black;
}
</style>
</head>
<body>
<div id="container2">
<script src="processing.js"></script> 
<div id="canvasContainer">
    <canvas data-processing-sources="oceanwaves3.pde"></canvas></div>

<div id="container">
    <div id="tile0"></div>
    <div id="tile1"></div>
    <div id="tile2"></div>
    <div id="tile3"></div>
    <div id="tile4"></div>
    <div id="tile5"></div>
    <div id="tile6"></div>
    <div id="tile7"></div>
    <div id="tile8"></div>
    <div id="tile9"></div>
    <div id="tile10"></div>
    <div id="tile11"></div>
    <div id="tile12"></div>
    <div id="tile13"></div>
    <div id="tile14"></div>
    <div id="tile15"></div>
</div>
<div id="restart" onclick="myFunction()">Restart</div>
</div>
<div id="chances"><p>Chances : 0</p></div>
<a href="ks1.php"><div id="level1"><p>Level : 1</p></div></a>
<a href="ks2.php"><div id="level2"><p>Level : 2</p></div></a>
<a href="ks3.php"><div id="level3"><p>Level : 3</p></div></a>

<div id="transbox_won"  ><p id="t4"  ></p></div>
</div>

<script type="text/javascript">

function initial()
{
    for(var i=0;i<16;i++)
    {
        document.getElementById('tile'+i).style.background="white";
    }
    
}
initial();
document.getElementById('tile0').onclick=function(){
               operate(0);

}
document.getElementById('tile1').onclick=function(){
               operate(1);

}
               
    

document.getElementById('tile2').onclick=function(){
               operate(2);
    }   


document.getElementById('tile3').onclick=function(){
               operate(3);
    }

document.getElementById('tile4').onclick=function(){
               operate(4);
    }   

document.getElementById('tile5').onclick=function(){
               operate(5);
    }

document.getElementById('tile6').onclick=function(){
               operate(6);
    }

document.getElementById('tile7').onclick=function(){
               operate(7);
    }

document.getElementById('tile8').onclick=function(){
               operate(8);
    }

document.getElementById('tile9').onclick=function(){
               operate(9);
    }

document.getElementById('tile10').onclick=function(){
               operate(10);
    }   


document.getElementById('tile11').onclick=function(){
               operate(11);
    }

document.getElementById('tile12').onclick=function(){
               operate(12);
    }   

document.getElementById('tile13').onclick=function(){
               operate(13);
    }

document.getElementById('tile14').onclick=function(){
               operate(14);
    }

document.getElementById('tile15').onclick=function(){
               operate(15);
    }

var points=['A','B','C','D','E','F','G','H','A','B','C','D','E','F','G','H'];

// Now we need to randomize the array
myFunction();
function myFunction() 
{
   points.sort(function(a, b){return 0.5 - Math.random()});
}

var turn=0,true_turn=0;
var count=0;
var f1,f2,prv=-1;
function operate(num)
{ { if (points[num]!=1) 
    if(!((count%2)==1&&num==prv))
    {
        if (count!=2) 
        {
            if (count==0) 
            {
                document.getElementById('tile'+num).innerHTML=points[num];
                f1=points[num];
                prv=num;


            }
            if (count==1) 
            {
                document.getElementById('tile'+num).innerHTML=points[num];
                f2=points[num];
                
            }
        }
        count++;
        if (count==2) 
        {   
            if(f1==f2)
            {   
                    points[num]='1';            
                    points[prv]='1';
                    document.getElementById('tile'+prv).style.background="white";
                    document.getElementById('tile'+num).style.background="white";
                    true_turn++;
                    if (true_turn==8) 
                    {
                        document.getElementById("t4").innerHTML = "CONGRATS!!! You've Won !!!";
  	document.getElementById("t4").style.visibility = "visible";
  	document.getElementById("transbox_won").style.visibility = "visible";
                    }
                }
                
                if(f1!=f2)
                {
                    setTimeout(function(){
                    document.getElementById('tile'+num).innerHTML="";
                    document.getElementById('tile'+prv).innerHTML="";},200);
                }
               count=0;
               turn++;
               document.getElementById('chances').innerHTML="Chances : "+turn;

        }
    }
}}

</script>

    <script type="text/javascript">
        var minutesLabel = document.getElementById("minutes");
        var secondsLabel = document.getElementById("seconds");
        var hoursLabel = document.getElementById("hours");
        var totalSeconds = 0;
        setInterval(setTime, 1000);

        function setTime()
        {
            ++totalSeconds;
            secondsLabel.innerHTML = pad(totalSeconds%60);
            minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
            hourssLabel.innerHTML = pad(parseInt(totalSeconds/60));
            if (true_turn==8) 
                return;
        }

        function pad(val)
        {
            var valString = val + "";
            if(valString.length < 2)
            {
                return "0" + valString;
            }
            else
            {
                return valString;
            }
        }
function myFunction() {
    location.reload();
}

var timeleft = 0;
var gameOverTimer = setInterval(function(){
++timeleft;
if(timeleft==48)
{	
	clearInterval(gameOverTimer);
	document.getElementById("t4").innerHTML = "GAME OVER !";
  	document.getElementById("t4").style.visibility = "visible";
  	document.getElementById("transbox_won").style.visibility = "visible";
	return;
}
 },1000);

    </script>



</body>
</html>