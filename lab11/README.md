### Лабораторна робота 11
**Тема:** Методи об’єкта Window

**Мета:** Навчитися використовувати на практиці методи об’єкта Window.

**Завдання**

```html
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Перевірка натиснутої кнопки</title>
    </head>
    <body>
        <h1>Javascript</h1>
        <form method="post" action="">
            <label for="surname">Прізвище</label><br>
            <input type="text" id="surname"><br>
            <label for="firstname">Ім'я</label><br>
            <input type="text" id="firstname"><br>
            <label for="username">Ім'я користувача</label><br>
            <input type="text" id="username"><br>
            <input type="submit" onclick="validate()" value="Sent">
        </form>
        <a href="#" id="refer">Dimasik</a>
        <div class="">
          <label for="first">1</label><br>
          <input type="text" id="first"><br>
          <label for="second">2</label><br>
          <input type="text" id="second"><br>
          <label for="sum">Sum</label><br>
          <input type="text" id="sum"><br>
          <button onclick="sumss()">Hello</button>
        </div>


        <script src="main.js"></script>
        <button onclick="verifyButton()" >ver</button>
    </body>
</html>
```

```js
function verifyButton() {
  alert("Proste povidomlena");
  result = confirm("pereviremo yaku knopky");
  if (result) {
    document.write("<p>Vi nat knopku ok </p>");
  } else {
    document.write("<p>Vi nat knopku otmena s</p>");
  }
}

function validate() {
  var surname = document.getElementById("surname"),
    firstname = document.getElementById("firstname"),
    username = document.getElementById("username");

  if (surname.value == "") {
    surname.style.backgroundColor = "red";
  } else {
    surname.style.backgroundColor = "write";
  }

  if (firstname.value == "") {
    firstname.style.backgroundColor = "red";
  } else {
    firstname.style.backgroundColor = "write";
  }

  if (username.value == "") {
    username.style.backgroundColor = "red";
  } else {
    username.style.backgroundColor = "write";
  }
}


function Hello(){
  do{
    var name = prompt("Imya", '');
    if (name == ""){
      alert("Vi ne vveli");
    } else {
      var show = confirm("Vashe imya: " + name);
    }
  } while (!show)
  alert("hello " + name)
}

document.getElementById("refer").onmouseenter = function(){
  Hello();
};


function sumss() {
  var first = document.getElementById('first');
  var second = document.getElementById('second');
  var sum = document.getElementById('sum');

  sum.value = parseInt(first.value) + parseInt(second.value);
}

```

**Висновок:** Я навчився використовувати на практиці методи об’єкта Window.