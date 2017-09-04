### Лабораторна робота 14

**Тема:** Використання функцій PHP.

**Мета**: Навчитися використовувати інструментарій PHP для створення і роботи з функціями та об’єктами.

**Завдання**

1. Визначити поточну версію установки PHP.

```php
echo phpversion();
```

2. Реалізувати та використати функцію, яка переводить милі в кілометрию.

```php
function mi2km ($mi) {
    $km = $mi * 1.609344;
    return $km;
}
echo mi2km(155);
```

2. Реалізувати та використати функцію, яка приводить в порядок ПІБ (виправляє регістр), що передаються в якості параметрів.

```php
function fixFullName($firstName,  $lastName, $middleName){
    $num_args = func_num_args();
    $arg_list = func_get_args();
    $mas = array();
    for ($i = 0; $i < $num_args; $i++) {
        array_push($mas, (ucfirst(strtolower($arg_list[$i]))));
        echo "$mas[$i] ";
    }	
    
}
fixFullName("IVANOV",  "VlADISLAV", "VLADIMIROVICH");
```

3. Реалізувати клас FootballPlayer, який описуватиме відомості про футболістів: команда, прізвище, ім’я, дата народження, амплуа, номер.

```php
class FootballPlayer {
public $team, $firstName, $lastName, $birthday, $role, $number;
public function __construct($team, $firstName, $lastName, $birthday, $role, $number) {
    $this->team = $team;
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->birthday = $birthday;
    $this->role = $role;
    $this->number = $number;
}
function show() {
    echo ($this->team."<br>".$this->firstName."<br>".$this->lastName."<br>".$this->birthday."<br>".$this->role."<br>".$this->number);
}	
}

$Vanya = new FootballPlayer("Dinamo Kiev", "Vanya", "Dorn", "12.12.1989", "defender", "14");

$Vanya -> show();
```



3. Розширити клас, створений у попередньому завданні, новим класом FootballPlayerStat, який міститиме наступну інформацію: зріст, захищені дані – вага, кількість проведених матчів, кількість забитих голів.

```php
class FootballPlayerStat extends FootballPlayer {
    public $height;
    private $weight, $matchesCount, $goalsCount;
    public function __construct($height, $weight, , $goalsCount) {
        $this->height = $height;
        $this->weight = $weight;
        $this->matchesCount = $matchesCount;
        $this->goalsCount = $goalsCount;
    }
    function setWeight($weight) {
        $this->weight = $weight; 
    }
    function setMatches($matchesCount) {
        $this->matchesCount = $matchesCount;
    }
    function setGoals($goalsCount) {
        $this->goalsCount = $goalsCount;
    }
    function getWeight() {
        return $weight;
    }
    function getMatches() {
        return $matchesCount;
    }

    function getGoals() {
        return $goalsCount;
    }
    function efficiency() {
        return $matchesCount/$goalsCount
    }
}
```



**Висновок:** Я навчився використовувати інструментарій PHP для створення і роботи з функціями та об’єктами.