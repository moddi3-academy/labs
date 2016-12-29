### Лабораторна робота 8
**Тема:** Управління процесом виконання сценаріїв в JavaScript

**Мета:** Навчитися використовувати конструкції JavaScript для управління процесом виконання сценаріїв.

**Завдання 1**

```html
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <script src="main.js"></script>
</body>
</html>
```

**Завдання 2**

```html
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Using a DOM function</title>
    <style>
        a {background-color:#eee;}
        a:hover {background:#ff0;}
        #toggleMe {
          background:#cfc; 
          display:none; 
          margin:30px 0; 
          padding:1em;
        }
    </style>
    <script async src="main.js"></script>
    </head>
    <body>
        <h1>Using a DOM function</h1>
        <h2><a id="showhide" href="#">Show paragraph</a></h2>
        <p id="toggleMe">This is the paragraph that is only displayed on
         request.</p>
		<p>The general flow of the document continues.</p>
    <script>

    </script>
	</body>
</html>
```

**Завдання 3**

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>RWD</title>
  <link href="styles/rwd.css" rel="stylesheet" />
</head>
<body>
 <div class="layout">
   <div class="header">
     <h1>Hreader</h1>
   </div>
	  	<div class="sidebar">
		  <a id="show" href="">Show</a>
		  <ul id="menu">
		    <li><a href="#">one</a></li>
		    <li><a href="#">two</a></li>
		    <li><a href="#">three</a></li>
		    <li><a href="#">four</a></li>
			<li><a href="#">five</a></li>
			<li><a href="#">six</a></li>
		  </ul>
		</div>
		<div class="content">
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
		<div class="footer">&copy;Copyright</div>
	</div>
	<script>
	  var changeDisplayState = function(id){
	  var d = document.getElementById('show'),
	    e = document.getElementById(id);
	  if (e.style.display === 'none' || e.style.display === ''){
	    e.style.display='block';
		d.innerHTML = 'Hide paragraph';
	  } else {
	    e.style.display = 'none';
		d.innerHTML = 'Show paragraph';
	    }
	  };
	  document.getElementById('show').onclick = function(){
	    changeDisplayState('menu');
		return false;
	  }
  </script>
</body>
</html>

```

```js
function print(x,y) {
  let s = "";
  for (var i = x; i <= y; i++) {
    if(i == y && i%2!=0) {
      s+=i;break;
    };
    if (i%2!=0){
      s+=i + ', ';
    }
  }
  return s
}

document.write(print(5, 25));

var changeDisplayState = function(id){
  var d = document.getElementById('showhide'),
  e = document.getElementById(id);
  if (e.style.display === 'none' || e.style.display === ''){
    e.style.display='block';
    d.innerHTML = 'Hide paragraph';
  }
  else {
    e.style.display = 'none';
    d.innerHTML = 'Show paragraph';
  }
};
document.getElementById('showhide').onclick = function(){
  changeDisplayState('toggleMe');
  return false;
}

```

**Висновок:** Я навчився використовувати конструкції JavaScript для управління процесом виконання сценаріїв.