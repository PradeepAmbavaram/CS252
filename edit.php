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

            $roll = $_GET["roll"];
          
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

                $sql = "SELECT * FROM `users`.`students` WHERE `students`.`roll` = $roll";

                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                echo     
      '<div class="row" style="border-top:4px solid black">
        <div class="col-md-4 text-center" style="border-right:4px dashed black"><h4 style="margin-top:55%;margin-bottom:65%">Delete the student from the database<br><br>
        <a href="/cs252/delete.php?roll='.$row['roll'].'"><button type="button" class="btn btn-primary">Click here to delete</button></a></h4></div>
        <div class="col-md-8"><h3 class="text-center">Fill the details here</h3>
          <form action="update.php" method="GET" style="padding:10%">';




      

                // echo $result->num_rows;

                // if ($result->num_rows > 0) {
                    // output data of each row
                    
                        
                        echo '<div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" id="name" name="name" placeholder="Ananth Reddy" value="'.$row['name'].'" required>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">DOB</label>
                              <input class="hidden" type="hidden" class="form-control"  name="s" value="'.$row['s'].'" required>
                            </div>
                            <div class="form-group">
                              
                              <input type="dob" class="form-control" id="dob" name="dob" placeholder="01-01-1996" value="'.$row['dob'].'" required>
                            </div>
                            <div class="form-group">
                              <label for="roll">Roll Number</label>
                              <input type="number" class="form-control" id="roll" name="roll" placeholder="14182" value="'.$row['roll'].'" required>
                            </div>
                            <div class="form-group">
                              <label for="reg">Phone Number</label>
                              <input type="text" class="form-control" id="reg" name="reg" placeholder="IITK013334" value="'.$row['reg'].'" required>
                            </div>
                            <div class="form-group">
                              <label for="cpi">CPI</label>
                              <input type="number" step="0.01" min="0" max="10" name="cpi" class="form-control" id="cpi" placeholder="8.4" value="'.$row['cpi'].'" required>
                            </div>';



                        
                    }
                // } else {
                //     echo "0 results";
                // }
                $conn->close();

          ?>

            
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>




