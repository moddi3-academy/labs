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