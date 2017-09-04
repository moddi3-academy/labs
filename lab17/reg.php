<!DOCTYPE html>
	<head>
	  <meta charset=\"UTF-8\">
		 <title>lab 12</title>
     <style>
        body {
          margin-top: 100px;
          text-align: center;
        }
     </style>
	</head>
	<body>
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