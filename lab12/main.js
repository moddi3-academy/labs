var canvas = O('canvas');

canvas.height = 220;
// canvas.width = 1000;
var ctx = canvas.getContext('2d');

var gradient = ctx.createLinearGradient(0, 75, 280, 75);
gradient.addColorStop(0.2, '#f1ff08');
gradient.addColorStop(0.4, '#ed501f');
gradient.addColorStop(0.8, '#f3ff08');
gradient.addColorStop(1, '#08ff37');

ctx.font = 'bold 35px Arial';

ctx.beginPath();
ctx.moveTo(5, 5);

ctx.bezierCurveTo(60, 50, 180, -5, 280, 5);
ctx.lineTo(280, 75); //правая сторона

ctx.bezierCurveTo(180, 70, 60, 125, 5, 75);
ctx.lineTo(5, 75); // левая

ctx.closePath();
ctx.fillStyle = "#2b51fb";

ctx.fill();

// *
// *
// *
// *
// *

ctx.beginPath();
ctx.moveTo(5, 75);

ctx.bezierCurveTo(60, 125, 180, 70, 280, 75);
ctx.lineTo(280, 150); //правая сторона

ctx.bezierCurveTo(180, 145, 60, 200, 5, 150);
ctx.lineTo(5, 150); // левая

ctx.closePath();
ctx.fillStyle = "#fbf92b";

ctx.fill();
// *
// * Image
// *
// *

var image = new Image(),
    w = 475;
    h = 288;
image.src = 'assets/1.png';
image.onload = function() {
  ctx.scale(0.125, 0.125);
  ctx.drawImage(image, 145, 220);
}

ctx.textBaseline = 'top';
ctx.textAlign = 'left';
ctx.shadowColor = "black";
ctx.shadowBlur = 10;

ctx.fillStyle = gradient;

ctx.fillText('Гимн Украины', 5, 175);

// *
// *
// * Audio
// *
// *

function audioPlay() {
  document.getElementById('audio').play();
}

function audioPause() {
  document.getElementById('audio').pause();
}
