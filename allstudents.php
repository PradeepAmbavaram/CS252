<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>CS252</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

  
  </head>
  <body>
    <div class="container-fluid">
      <div class="row" style="background:#d3d3d3">
        <div class="col-md-12 text-center">
          <h1>Students Database</h1>
        </div>
      </div>
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

		$sql = "SELECT `s`, `name`, `dob`, `roll`, `reg`, `cpi`, `grade` FROM `students` WHERE 1";
		$result = $conn->query($sql);
		
	  echo
      '<div class="row" style="border-top:4px solid black">
      	<div class="col-md-12" style="padding:3% 7% 0% 7%"><p><h4>Total Students = '.$result->num_rows.'</h4><a href="/cs252/index.php"><button type="button" class="btn btn-primary">Add a student</button></a></p></div>
        <div class="col-md-12 text-center" style="padding:0% 7% 5% 7%">
        	<table class="table table-striped table-bordered">
  				<thead>
  					<td><strong>#</strong></td>
  					<td><strong>Name</strong></td>
  					<td><strong>DOB</strong></td>
  					<td><strong>Roll No.</strong></td>
  					<td><strong>Phone No.</strong></td>
  					<td><strong>CPI</strong></td>
  					<td><strong>Grade</strong></td>
  					<td><strong>Edit/Delete</strong></td>
  				</thead>
  				<tbody>';
          $i = 1;
  				if ($result->num_rows > 0) {
		    		while ($row = $result->fetch_assoc()) { 
  						echo '<tr>
			  						<td>'.$i.'</td>
			  						<td>'.$row['name'].'</td>
			  						<td>'.$row['dob'].'</td>
			  						<td>'.$row['roll'].'</td>
			  						<td>'.$row['reg'].'</td>
			  						<td>'.$row['cpi'].'</td>
			  						<td>'.$row['grade'].'</td>
			  						<td><a href="/cs252/edit.php?roll='.$row['roll'].'">Edit/Delete</a></td>
			  					</tr>';
			  						$i = $i + 1;
  					}
				}
  				$conn->close();
      	?>
  					
					
  					
  	
  				</tbody>
			</table>

        </div>
      </div>
      
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

								


 
