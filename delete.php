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

	$roll = $_GET["roll"];



	$sql = "DELETE FROM `users`.`students` WHERE `students`.`roll` = $roll";

	if ($conn->query($sql) === TRUE) {
	    echo "Deleted record successfully\n";
	    echo "<a href='http://localhost/cs252/allstudents.php'>Go to all students</a>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>
