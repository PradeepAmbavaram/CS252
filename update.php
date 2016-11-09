<?php
	$servername = "localhost";
	$username = "root";
	$password = "10&10&10";
	$dbname = "users";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$name = $_GET["name"];
	$dob = $_GET["dob"];
	$roll = $_GET["roll"];
	$reg = $_GET["reg"];
	$cpi = $_GET["cpi"];
	$s = $_GET["s"];

	if($cpi == 10) $grade = A;
	elseif($cpi >= 8) $grade = B;
	elseif($cpi >= 6) $grade = C;
	elseif($cpi >= 4) $grade = D;
	elseif($cpi >= 2) $grade = E;
	else $grade = F;


 	// echo = 
	// $sql = "UPDATE `assignment1`.`students` SET `cpi` = '$cpi' WHERE `students`.`s` = $s";
	$sql = "UPDATE `users`.`students` SET `name` = '$name', `dob` = '$dob', `roll` = '$roll', `reg` = '$reg', `cpi` = '$cpi', `grade` = '$grade' WHERE `students`.`s` = $s";
	
	if ($conn->query($sql) === TRUE) {
	    echo "Updated record successfully\n";
	    echo "<a href='http://localhost/cs252/allstudents.php'>Go to all students</a>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>

