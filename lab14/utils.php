<?php 
echo phpversion();

function br () {
    echo "<br>";
}
br();
function mi2km ($mi) {
    $km = $mi * 1.609344;
    return $km;
}

echo mi2km(155);

br();

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
br();
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
class FootballPlayerStat extends User {
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
}x


$Vanya = new FootballPlayer("Dinamo Kiev", "Vanya", "Dorn", "12.12.1989", "defender", "14");

$Vanya -> show();