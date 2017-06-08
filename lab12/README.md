### Лабораторна робота 12

**Тема:** Графічні та мультимедійні ефекти на веб-сторінках

**Мета:** Навчитися інтегрувати у веб-документи відео- та аудіо
об’єкти за допомогою елементів <audio> і <video>, створювати графічні ефекти за
допомогою елементу <canvas>.

**Завдання**

Створити сторінку наступного вигляду: 

<img src="E:\moddi3\Учёба\Web-дизайн\labs2017\lab12\1.png" width="200px">

**index.hmtl**

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <audio id="audio">
    <source src="assets/2.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>

  <canvas id="canvas">
    HTML5 не поддерживается!
  </canvas>
  <div class="controls">
    <button onclick="audioPlay()" type="button">Play</button>
    <button onclick="audioPause()" type="button">Pause</button>
  </div>
  <script src="osc.js"></script>
  <script src="main.js"></script>

</body>
</html>
```

**osc.js**

```javascript
function O(obj) {
	if (typeof obj == 'object') return obj
	else return document.getElementById(obj)
}

function S(obj) {
	return O(obj).style
}

function C(name) {
	var elements = document.getElementsByTagName('*');
	var objects = [];
	for (var i=0; i<elements.length; ++i) {
		if (elements[i].className == name) 
			objects.push(elements[i]);
	}
	return objects;
}
```

**main.js**

```javascript
var canvas = O('canvas');

canvas.height = 220;
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

ctx.beginPath();
ctx.moveTo(5, 75);

ctx.bezierCurveTo(60, 125, 180, 70, 280, 75);
ctx.lineTo(280, 150); //правая сторона

ctx.bezierCurveTo(180, 145, 60, 200, 5, 150);
ctx.lineTo(5, 150); // левая

ctx.closePath();
ctx.fillStyle = "#fbf92b";

ctx.fill();

// * Image

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

// * Audio

function audioPlay() {
  document.getElementById('audio').play();
}

function audioPause() {
  document.getElementById('audio').pause();
}
```

**Висновок:** Я навчився інтегрувати у веб-документи відео- та аудіо
об’єкти за допомогою елементів <audio> і <video>.