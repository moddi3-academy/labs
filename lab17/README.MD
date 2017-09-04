### Лабораторна робота 17

**Тема:** Обробка інформації в формах за допомогою PHP.

**Мета**: Навчитися використовувати функціонал PHP для обробки даних, що передаються за допомогою форм.

**Завдання**

1. Створити html-файл math_op.html який міститиме форму з двома полями для введення чисел і перемикач, який визначатиме, яку дію потрібно виконати з числами.

```html
<!DOCTYPE html>
<html>
  <head>
     <meta charset="UTF-8">
    <title>form_math_op</title>
  </head>
  <body>
    
    <form action="math_op.php" method="post">
        <p>a:
        <input type="text" name="a" size="4">+
        <input type="radio" name="act" value="plus" checked>or *
        <input type="radio" name="act" value="myltiply">b:
        <input type="text" name="b" size="4"><br/>
        <input type="submit" value="Go">    
        </p>
    </form>
  </body>
</html>
```

2. Створити php-файл math_op.php який оброблятиме інформацію введену у формі. Залежно від вибраного положення перемикача виконати відповідну дію. 

```php+HTML
<!DOCTYPE html>
	<head>
	  <meta charset=\"UTF-8\">
		 <title>lab 12</title>
	</head>
	<body>
<?php 
	if (isset($_POST['a']) && preg_match('/^[0-9]{1,4}$/', $_POST['a'])){
		$a = $_POST['a'];
	} else {
		exit("NOT CORRECT <br/>");
	}
```

```php+HTML
if (isset($_POST['b']) && preg_match('/^[0-9]{1,4}$/', $_POST['b'])){
		$b = $_POST['b'];
	} else {
		exit("NOT CORRECT <br/>");
	}

	if($_POST['act']=='plus') {
		$c =  $_POST['a'] +  $_POST['b'];
		echo "$c = $a + $b";
	} else {
		$c =  $_POST['a'] *  $_POST['b'];
		echo "$c = $a * $b";
	}
?>
  </body>
</html>;
```

3. Створити новий файл, в який включити форму, що містить наступні дані.

```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>reg_form</title>
  </head>
  <body>
    <form name="reg" action="reg.php" method="post">
        <p>Прізвище: 
        <input name="surname" type="text" size="20"></p>
        <p>Ім'я: 
        <input name="name" type="text" size="20"></p>
        <p>Стать: Ч <input name="sex" type="radio" value="m" checked> Ж <input name="sex" type="radio" value="v"></p>
```

```html
<p>Освіта: 
        <select name="education">
            <option selected value="Середня">Середня</option>
            <option value="Неповна середня">Неповна середня</option>
            <option value="Вища">Вища</option>
            <option value="Неповна вища">Неповна вища</option>
        </select>
        <p>Хочу записатися на курси <input name="courses" value="courses" type="checkbox" checked></p>
        <p>Чи звертались в нашу організацію? Так <input name="first_time" type="radio" value="yes"> Ні <input name="first_time" type="radio" value="no" checked></p>
        <p><input value="Відправити" type="submit"></p>
    </form>
  </body>
</html>
```



4. Створити reg.php, що динамічно формуватиме сторінку-результат.

```php+HTML
<!DOCTYPE html>
	<head>
	  <meta charset="UTF-8">
		 <title>lab 12</title>
     <style>
        body {
          margin-top: 100px;
          text-align: center;
        }
     </style>
	</head>
	<body>
```

```php+HTML
<?php 
  $sname = $_POST['surname'];
	$fname = $_POST['name'];
	$sex = $_POST['sex'];
	$edu = $_POST['education'];
	$courses = $_POST['courses'];
	$ftime = $_POST['first_time'];

	if ($sname!='' && $fname!='' && isset($sname, $fname, $sex, $edu, $courses)) {
		
	} else {
		exit("NOT CORRECT <br/>");
	}
```

```php+HTML
if($sex=='m') {
    $greeting = "Шанований";
  } else {
    $greeting = "Шанована";
  }
  if($ftime==true) {
    $ftime = "Сподіваємося на продовження співпраці. <br>";
  } else {
    $ftime = "Сподіваємося на подальшу співпрацю. <br>";
  }
  printf("
    $greeting $sname $fname. 
    Ми раді вітати Вас на наших курсах. <br>
    Ви маете $edu освіту.
    $ftime")
	
?>
  </body>
</html>
```

**Висновок:** Я навчився використовувати функціонал PHP для обробки даних, що передаються за допомогою форм.

