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

	if($cpi == 10) $grade = A;
	elseif($cpi >= 8) $grade = B;
	elseif($cpi >= 6) $grade = C;
	elseif($cpi >= 4) $grade = D;
	elseif($cpi >= 2) $grade = E;
	else $grade = F;

	// echo "A";
	$sql = "SELECT `s` FROM `students` ORDER BY `s` DESC LIMIT 1";

		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
	// $s = $result->num_rows + 1;
	$row = $result->fetch_assoc();
	$s = $row['s']+1;
}else{
	// echo "B";
	$s = 1;
}
	// echo $name;
	// echo $dob;
	// echo $roll;
	// echo $reg;
	// echo $cpi;
	// echo $grade;
	$sql = "INSERT INTO `users`.`students` (`s`, `name`, `dob`, `roll`, `reg`, `cpi`, `grade`) VALUES ('$s', '$name', '$dob', '$roll', '$reg', '$cpi', '$grade')";

	
	if ($conn->query($sql) === TRUE) {
	   
	    header("Location: http://localhost/cs252/allstudents.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>
