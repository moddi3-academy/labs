<?php
	$n = (int)$_POST['Mas'];
	$mas[$n] ;
	echo "<br> MAS RAND NUMBER <br>";
	for ($i = 0;$i < $n; $i++){
		$mas[$i]= ((int)rand(1,100));
		echo $mas[$i]." ";
		}
	echo "<br>";

	sort($mas);
	echo "<br> MAS SORT NUMBER <br>";
	for ($i = 0;$i < $n; $i++){
			echo $mas[$i]." ";
		}
		echo "<br>";

	$mas = array_reverse($mas);
	echo "<br> MAS REVERSE NUMBER <br>";
	for ($i = 0;$i < $n; $i++){
			echo $mas[$i]." ";
		}
		echo "<br>";

	array_pop($mas);
	echo "<br> MAS POP NUMBER <br>";
	for ($i = 0;$i < $n; $i++){
			echo $mas[$i]." ";
		}
		echo "<br>";

	
	echo "<br> MAS SUM NUMBER / COUNT <br>";
	echo (array_sum($mas) / count($mas));
	echo "<br>";

	$mas['maximum'] = 100;
	echo "<br> MAS  FOREACH <br>";
	foreach ($mas as $arr) {
		echo $arr." ";	
	}
	echo "<br>";

	if (in_array(50, $mas)) 
		echo "50 in the mas <br>" ;
		else
		echo "50 NOT in the mas <br>";

	echo "<br> MAS is NOT UNIQUE <br>";
	$mas = array_unique($mas);
	foreach ($mas as $arr) {
		echo $arr." ";	
	}
	echo "<br>";
		echo "<br>";