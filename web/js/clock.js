x=102;
y=102;
cvs=document.getElementById("canvas");
ctx=cvs.getContext("2d");

function loop()
{
    now=new Date();
    h=now.getHours();
    m=now.getMinutes();
    s=now.getSeconds();

    ctx.beginPath();
    ctx.fillStyle="rgb(255, 250, 223)"; // Фон часов внутренний
    ctx.arc(x,y,99,0,Math.PI*2,true);
    ctx.fill();
    ctx.strokeStyle="rgb(0, 60, 0)";  // Фон границы часов
    ctx.lineWidth=4;
    ctx.stroke();
    drawNumber();

    drawPointer(360*(h/12)+(m/60)*30-90,50,"rgb(0, 60, 0)",5);    // Часовая стрелка
    drawPointer(360*(m/60)+(s/60)*6-90,70,"rgb(0, 60, 0)",4);    // Минутная стрелка
    drawPointer(360*(s/60)+x-90,90,"black",2);           // Секундная стрелка
}

function drawNumber()
{
    for(n=0;n<12;n++)
    {
        d=-60;
        num = new Number(n+1);
        str = num.toString();
        dd = Math.PI/180*(d+n*30);
        tx = Math.cos(dd)*87+95;
        ty = Math.sin(dd)*87+109;
        ctx.font = "20px Tahoma";
        ctx.fillStyle = "black";
        ctx.fillText(str, tx, ty);
    }
}

function drawPointer(deg,len,color,w)
{
    rad=(Math.PI/180*deg);
    x1=x+Math.cos(rad)*len;
    y1=y+Math.sin(rad)*len;

    ctx.beginPath();
    ctx.strokeStyle=color;
    ctx.lineWidth=w;
    ctx.moveTo(x,y);
    ctx.lineTo(x1,y1);
    ctx.stroke();
}

setInterval(loop,500);