var wefew = `Примітка. Під час виконання завдань потрібно обов’язково дотримуватись стилю програмування та використовувати`;

var s1 = "<div id='main'>Рядок: <span class='insert'>" + wefew + "</span></div>";
var s2 = "<div>Количество символов: <span class='insert2'>" + wefew.length + "</span></div>";

document.write(s1);
document.write(s2);

function strWrite(str) {
  document.write("<div id='main'>Рядок: <span class='insert'>" + str + "</span></div>");
  document.write("<div>Количество символов: <span class='insert2'>" + str.length + "</span></div>");
}
document.write("<b>Fuction/</b>");
strWrite(wefew)

document.write('<hr>');
var myName = 'O\'Braien';
var myAge = 24;
document.write("a: " + 42 + "<br>"); // Числовий літерал
document.write("b: " + "Hi" + "<br>"); // Рядковий літерал
document.write("c: " + true + "<br>"); // Літерал константи
document.write("d: " + myName + "<br>"); // Літерал рядкової змінної
document.write("e: " + myAge + "<br>"); // Літерал числової змінної


function arrPrint(a, b) {
  for (var i = a; i <= b; i++) {
    if (i % 2 == 0) {
      document.write(i + " ");
    }
  }
}
arrPrint(5, 25)
document.write("<br>")

function randomArr(a, b, c) {
  var random = 0;
  while (c > 0) {
    random = Math.floor(Math.random() * (b - a + 1) + a);
      if (random % 2 == 0) {
        c--;
        document.write(random + " ");
      }
    }
  }



randomArr(5, 25, 5);
