var time=45;
var timesup=0;
var started=0;
function CountDown() {
if(time>0)
{document.math.timer.value=time;
time=time-1;
var gameTimer=setTimeout("CountDown()", 1000)}
else if (time==0)
{document.math.timer.value="0";
timesup=1;
alert('Koniec czasu');
document.math.firstnum.value="";
document.math.operator.value="";
document.math.secondnum.value="";
document.math.answer.value="";
}
}
<!--END OF TIMER SCRIPT-->

function startgame()
{if (started!=0)
{alert('Już zacząłeś!');}
else
{
started=1;
CountDown();
getProb();
}
}

<!--START OF RANDOM NUMBER SCRIPT-->
function randnum(min,max)
{
var num=Math.round(Math.random()*(max-min))+min;
return num;
}
<!--END OF RANDOM NUMBER SCRIPT-->

var choose, rightanswer
function getProb()
{
choose=randnum(1,4);
if (choose=="1")
{document.math.operator.value="+";
var choose1=randnum(0,50);
var choose2=randnum(0,50);
document.math.firstnum.value=choose1;
document.math.secondnum.value=choose2;
rightanswer=choose1 + choose2;
}
if (choose=="2")
{document.math.operator.value="-";
var choose2=randnum(0,50);
var choose1=randnum(choose2,50);
document.math.firstnum.value=choose1;
document.math.secondnum.value=choose2;
rightanswer=choose1 -  choose2;
}
if (choose=="3")
{document.math.operator.value="x";
var choose1=randnum(0,10);
var choose2=randnum(0,10);
document.math.firstnum.value=choose1;
document.math.secondnum.value=choose2;
rightanswer=choose1 * choose2;
}
if (choose=="4")
{document.math.operator.value="/";
var choose2=randnum(1,10);
var choose1=choose2 * randnum(0,10);
document.math.firstnum.value=choose1;
document.math.secondnum.value=choose2;
rightanswer=choose1 /  choose2;
}
}
function answerit()
{
if (started==0)
{alert('Naciśnij \'Start\'!');}
else
{
if (timesup!=0)
{alert('Koniec czasu!');}
else
{
var theiranswer=eval(document.math.answer.value);
var theirpoints=eval(document.math.points.value);
if (theiranswer==null)
{alert('Wprowadź odpowiedź!');
document.math.answer.select();}
else
{
if (theiranswer==rightanswer)
{
alert('Dobrze!');
theirpoints++;
document.math.points.value=theirpoints;
}
else
{alert(theiranswer + " niepoprawnie!\n\n"+rightanswer + " jest poprawne!")}
document.math.answer.select();
getProb();
}
}
}
}