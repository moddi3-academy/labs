<?php 
  header('Content-Type: text/html; charset=utf-8');
	echo "<a href='/'>Main</a> <br>";  
	echo "Лабораторна робота №13 <br>";
	echo "Привет, <strong>Тимофей</strong> <br>";

	$a = 3;
	$b = 5;
	$c = $a + $b;

	echo "Результат складання чисел <b>$a</b> і <b>$b</b> дорівнює <b>$c</b> <br>";
	if ($c % 2 == 0) {
		echo "<em>Число парне</em>";
	} else {
		echo "<em>Число непарне</em>";
	}
	echo "<br>";
	for ($i=0; $i < 101; $i++) { 
		echo "<a href='#'>$i |</a> ";
	}


$css = "border: solid black 1px;";
$t1 = "<table><tr><td style=\"$css\">*</td></tr></table>";
echo $t1, '<hr>';

$i=0;
echo "<table>";
while ($i<5){
	$i++;
	echo "<tr><td style=\"$css\">$</td></tr>";

}
echo "</table> <hr>";

echo "<table>";
$j = 4;
do {
	echo "<tr>";
	for($i =0;$i<10;$i++) {
		echo "<td style=\"$css\">*</td>";
	}
	echo "</tr>";
	--$j;
} 
while($j > 0);
echo "</table> <hr>";

echo "<table>";
for($j = 1;$j < 6;$j++){
	echo "<tr>";
	for($i = 1;$i < 6;$i++){
		echo "<td style=\"$css\">Рядок $j, <br> Стовпець $i</td>";
	}
echo "</tr>";
}
echo "</table><hr>";

echo "<table><tr><td><strong>№</strong></td><td><strong>x</strong></td><td><strong>y</strong></td></tr>";
$x=-5;
for($j = 0;$j<26;$j++){
	echo "<tr>";
		if($x<0) {
		echo "<td style=\"$css\">".($j+1)."</td><td style=\"$css\" bgcolor='yellow'>".$x."</td><td style=\"$css\">".$x*$x."</td>";	
		} else
		echo "<td style=\"$css\">".($j+1)."</td><td style=\"$css\" bgcolor='orange'>".$x."</td><td style=\"$css\">".$x*$x."</td>";
		$x++;
echo "</tr>";
}
echo "</table><hr>";	

echo "<table>";
for($j = 0;$j<9;$j++){
echo "<tr>";

echo "<td style=\"$css\">".($j+1)."</td>";
	for($i = 0;$i<9;$i++){

		echo "<td style=\"$css\">".(($i+2)*($j+1))."</td>";
	}
echo "</tr>";
}
echo "</table>";
